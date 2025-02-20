<?php

#Sustitucion de LISKOV

//contratos
interface ISchedule{
    public function assignSchedule($schedule);
}

class Teacher implements ISchedule{
    public function assignSchedule($schedule) {
        // code..
    }

    public function material_clase($material, $clase){

    }
}

class Director implements ISchedule{

    public function assignSchedule($schedule)
    {
        
    }
}

class GuestTeacher{

    //code..
    public function calcular_horas(){

    }
}

$profesor_invitado = new GuestTeacher();
// echo $profesor_invitado->assignSchedule("Lunes a miercoles de 8am - 1pm");
// $profesor_invitado->material_clase();