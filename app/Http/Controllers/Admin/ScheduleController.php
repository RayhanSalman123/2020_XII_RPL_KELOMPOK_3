<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Schedule;
use App\Day;
use App\Hours;
use App\Majors;
use App\Subjects;
use App\SchoolYears;
use App\Teacher;
use App\TeacherSubject;
use App\Classes;
use App\DayHour;


class ScheduleController extends Controller
{
    public function AddSchedule()
    {
        $data['teacher'] = TeacherSubject::join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')
            ->get();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        $data  ['hour'] = Hours::whereNotIn('hour_id', [12, 13, 14])->get();
        $data ['class'] = Classes::join('grades', 'classes.cl_grade_id', '=', 'grades.grade_id')
            ->join('majors', 'classes.cl_major_id', '=', 'majors.major_id')->orderBy('grades.grade_id','asc')
            ->orderBy('classes.class_id', 'ASC')
            ->get();

        return view('admin.schedule.add_schedule', $data);

    }

    public function SaveSchedule(Request $request)
    {
        
        if ($request->day_id==6 AND $request->hour_id==7) {
             Alert::error('gagal', 'Ini Waktu untuk Istirahat');
            return back();
        }
        $class_id = $request->input('class_id');
        $subject_id = $request->input('subject_id');
        $hour_id = $request->input('hour_id');
        $day_id = $request->input('day_id');
        $dayHour = DayHour::whereIdDay($day_id)
            ->whereIdHour($hour_id)
            ->first();
        $teacher = TeacherSubject::whereTsId($subject_id)->first();
        $teacher_id = $teacher->ts_teacher_id;

        $schedule = Schedule::where('sch_day_hour_id', $dayHour->dh_id)
            ->where('sch_class_id', $class_id)
            ->first();
        if ($schedule) {
            Alert::error('gagal', 'Jam sudah Terisi');
            return back();
        } else {
            $cek = Schedule::where('sch_teacher_subject_id', $subject_id)->where('sch_day_hour_id', $dayHour->dh_id)
                ->first();

            if ($cek) {
                Alert::error('guru sudah ada jam pelajar di kelas lain');
                return back();
            } else {

                $cek_jam = Schedule::whereSchDayHourId($dayHour->dh_id)
                ->whereSchClassId($class_id)
                ->whereSchTeacherSubjectId($subject_id)
                ->count();
                // $cek_jam = Schedule::join('teacher_subjects','schedules.sch_teacher_subject_id' , '=' , 'teacher_subjects.ts_id')
                //     ->join('subjects','teacher_subjects.ts_subject_id' , '='  , 'subjects.subject_id')
                //     ->join('day_hours' , 'schedules.sch_day_hour_id' , '=' , 'day_hours.dh_id')
                //     ->where('teacher_subjects.ts_teacher_id',$teacher_id)
                //     ->where('day_hours.id_hour', $hour_id)
                //     ->first();
                if($cek_jam > 0 ){
                    Alert::error('Gagal', 'Guru Sudah Mengajar Dikelas Lain dengan Mapel   '.' '.$cek_jam->name_subject);
                    return  back();
                } else {
                    Schedule::create([
                        'sch_teacher_subject_id' => $subject_id,
                        'sch_day_hour_id' => $dayHour->dh_id,
                        'sch_class_id' => $class_id
                    ]);
                    return back()->withSuccess('berhasil ditambahkan');
                }


            }

        }

    }

    public function ListSchedule()
    {
        
        $data ['class'] = Classes::join('majors', 'classes.cl_major_id', '=', 'majors.major_id')
            ->join('grades', 'classes.cl_grade_id', '=', 'grades.grade_id')
            ->get();

        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        return view('admin.schedule.list-schedule', $data);
    }

    public function asdf (){
         $a = Schedule::whereSchClassId(1)


            ->join('teacher_subjects' , 'schedules.sch_teacher_subject_id' ,  '=' ,  'teacher_subjects.ts_id')
            ->join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')
            ->join('day_hours', 'schedules.sch_day_hour_id', '=', 'day_hours.dh_id')
            ->join('hours', 'day_hours.id_hour', '=', 'hours.hour_id')
            ->where('day_hours.id_day', 2)
            ->where('day_hours.id_hour', 1)
            ->orderBy('hours.hour_id' , 'ASC')
            ->select('users.usr_name', 'subjects.name_subject')
            ->first();

        return $a->usr_name . $a->name_subject;


            

    }

    public  function edit($schedule_id)
    {
        $data['edit'] = Schedule::whereSchClassId($schedule_id)
        ->join('classes as kelas', 'schedules.sch_class_id', '=', 'kelas.class_id')
        ->join('day_hours as hour', 'schedules.sch_day_hour_id', '=', 'hour.dh_id')
        ->join('teacher_subjects as teacher', 'schedules.sch_teacher_subject_id', '=', 'teacher.ts_id')
        ->select('kelas.*',
            'schedules.*',
            'hour.*',
            'teacher.*'
        )
        ->orderBy('schedules.sch_day_hour_id', 'ASC')
        ->get();

           $data['teacher'] = TeacherSubject::join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')
            ->get();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        $data  ['hour'] = Hours::whereNotIn('hour_id', [12, 13, 14])->get();
        $data ['class'] = Classes::join('grades', 'classes.cl_grade_id', '=', 'grades.grade_id')
            ->join('majors', 'classes.cl_major_id', '=', 'majors.major_id')->orderBy('grades.grade_id','asc')
            ->orderBy('classes.class_id', 'ASC')
            ->get();


        $data['id'] = $schedule_id;
        return view('admin.schedule.edit_schedule', $data);
                
    }


      public function update(Request $request, $schedule_id)
      {

         if ($request->day_id==6 AND $request->hour_id==7) {
             Alert::error('gagal', 'Ini Waktu untuk Istirahat');
            return back();
        }

        $get = Schedule::join('day_hours', 'schedules.sch_day_hour_id', '=', 'day_hours.dh_id')
        ->select('schedules.*',
            'day_hours.*')
        ->where('sch_id', $schedule_id)
        ->first();




        $subject_id = $request->input('subject_id');
       
        $schedule_edit = Schedule::where('sch_id', $schedule_id)->first();

        $subject_id = $request->input('subject_id');

        $class_id = $request->input('class_id');
        $hour_id = $request->input('hour_id');
        $day_id = $request->input('day_id');
       
        $dayHour = DayHour::whereIdDay($get->id_day)
            ->whereIdHour($get->id_hour)
            ->first();

        
        $teacher = TeacherSubject::whereTsId($subject_id)->first();
        $teacher_id = $teacher->ts_teacher_id;

            $cek = Schedule::where('sch_teacher_subject_id', $subject_id)->where('sch_day_hour_id', $dayHour->dh_id)
                ->first();

            if ($cek) {
                Alert::error('guru sudah ada jam pelajar di kelas lain');
                return back();
            } else {
                $cek_jam = Schedule::whereSchDayHourId($dayHour->dh_id)
                ->whereSchClassId($schedule_edit->sch_class_id)
                ->whereSchTeacherSubjectId($subject_id)
                ->count();
                // $cek_jam = Schedule::join('teacher_subjects','schedules.sch_teacher_subject_id' , '=' , 'teacher_subjects.ts_id')
                //     ->join('subjects','teacher_subjects.ts_subject_id' , '='  , 'subjects.subject_id')
                //     ->join('day_hours' , 'schedules.sch_day_hour_id' , '=' , 'day_hours.dh_id')
                //     ->where('teacher_subjects.ts_teacher_id',$teacher_id)
                //     ->where('day_hours.id_hour', $hour_id)
                //     ->first();
                if($cek_jam > 0 ){
                    Alert::error('Gagal', 'Guru Sudah Mengajar Dikelas Lain dengan Mapel   '.' '.$cek_jam->name_subject);
                    return  back();
                } else {

                    $schedule_edit->sch_teacher_subject_id = $request->subject_id;
                    $schedule_edit->save();
                    return back()->withSuccess('berhasil diperbaharui');
                }


            }
      }

}
