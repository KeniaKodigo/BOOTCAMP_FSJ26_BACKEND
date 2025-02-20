<?php

interface AcademiaManagement {
    public function registerStudent();
    public function assignProfessor();
}

interface Payments{
    public function registerPayment();
}

class Course implements AcademiaManagement {
    public function registerStudent() {
        // Código para inscribir estudiante
    }

    public function assignProfessor() {
        // Código para asignar profesor
    }

}