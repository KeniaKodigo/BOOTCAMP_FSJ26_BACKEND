<?php

interface DataManagement {
    public function registerStudent();
    public function assignProfessor();
    public function registerPayment();
}

class Course implements DataManagement {
    public function registerStudent() {
        // Código para inscribir estudiante
    }

    public function assignProfessor() {
        // Código para asignar profesor
    }

    public function registerPayment() {
        // Curso no debería encargarse de pagos
    }
}