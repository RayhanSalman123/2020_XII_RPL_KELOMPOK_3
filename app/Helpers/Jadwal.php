<?php

namespace App\Helpers;

use App\Hours;
use App\Schedule;

class Jadwal

{
    public static function Mapel()
    {
        return 'Rehan Gelo';
    }

    public static function MapelJam($class_id, $hour)
    {
        return Schedule::whereSchClassId($class_id)
            ->join('teacher_subjects' , 'schedules.sch_teacher_subject_id' ,  '=' ,  'teacher_subjects.ts_id')
            ->join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')


            ->join('day_hours', 'schedules.sch_day_hour_id', '=', 'day_hours.dh_id')
            ->join('hours', 'day_hours.id_hour', '=', 'hours.hour_id')
            ->where('hours.hour_id', $hour)
            ->orderBy('hours.hour_id' , 'ASC')
            ->get();
    }

    public static function MapelDay($class_id, $day, $hour){
        return  Schedule::whereSchClassId($class_id)
            ->join('day_hours', 'schedules.sch_day_hour_id', '=', 'day_hours.dh_id')
            ->join('hours' , 'day_hours.id_hour' , '=' , 'hours.hour_id')
            ->where('day_hours.id_day', $day)
            ->where('day_hours.id_hour', $hour)
            ->join('teacher_subjects' , 'schedules.sch_teacher_subject_id' ,  '=' ,  'teacher_subjects.ts_id')
            ->join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')
            ->select('users.usr_name', 'subjects.name_subject','hours.hour_notes')
            ->get ();

    }

    public static function JamMapel()
    {
        return Hours::whereNotIn('hour_id', [11, 12, 13])
            ->orderBy('hour_id', 'ASC')
            ->get();
    }
}
