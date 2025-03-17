<?php

#aplico open closed
interface INotification{
    public function send($message);
}

#clases concretas (clase que se encarga de crear objetos de un tipo concreto)
#productos
class EmailNotification implements INotification{
    public function send($message){
        echo "Notificacion por correo: $message\n";
    }

}

class SMSNotification implements INotification{
    public function send($message){
        echo "Enviando SMS: $message\n";
    }
}

class WhatsappNotification implements INotification{
    public function send($message){
        echo "Enviando Whatsapp: $message\n";
    }
}

#creando nuestra Fabrica (Factory Method)
class NotificationFactory{

    // public static function data(INotification $notification){}
    public static function createNotification($type) : INotification{
        //crear instancias
        //match => switch
        return match($type){
            'email' => new EmailNotification(),
            'sms' => new SMSNotification(),
            'whatsapp' => new WhatsappNotification(),
            default => throw new Exception("Tipo de notificacion no soportado")
        };
    }

    //metodo
}

// NotificationFactory::data(new EmailNotification); //EMAIL
// NotificationFactory::data(new SMSNotification); //SMS
// NotificationFactory::data(new SMSNotification); //SMS

NotificationFactory::createNotification('email'); //creando una notificacion por email


$email = new EmailNotification();
$email->send("Hola, tienes un nuevo mensaje");

$sms = new SMSNotification();

$email2 = new EmailNotification();


