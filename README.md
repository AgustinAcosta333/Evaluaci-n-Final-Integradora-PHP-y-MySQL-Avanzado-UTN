Proyecto de Sistema de Administración de Turnos para Taller Mecánico

Video: https://www.youtube.com/watch?v=Fl7ACXAMY_M

Tiene como objetivo desarrollar una aplicación web que permita a los usuarios solicitar turnos para reparaciones o atenciones a sus automóviles sin la necesidad de registrarse. 
El sistema también permite a un administrador gestionar (aprobar, cancelar, trabajar y finalizar) estos turnos.
Cuenta con dos funcionalidades Principales:

  >Solicitud de Turnos por Parte de los Usuarios
    -Los usuarios pueden solicitar turnos a través de un formulario web.
    -El formulario recoge información básica como nombre, correo electrónico, número de teléfono, modelo del automóvil y el tipo de servicio requerido.
    -El sistema incluye un CAPTCHA para evitar el envío de formularios automatizados.

  >Gestión de Turnos por Parte del Administrador
    -Los administradores pueden acceder a un panel de control donde pueden ver todos los turnos solicitados.
    -Los turnos pueden ser aprobados, cancelados, marcados como en proceso y finalizados por el administrador.
    -El estado de cada turno se actualiza en la base de datos y se muestra tanto en el panel de control del administrador como en el feedback a los usuarios.


Los lenguajes empleados en el proyecto fueron
  >Frontend
    -HTML y CSS: Para realizar las interfaces de usuario y los formularios.
  >Backend
    -PHP:    En la lógica y procesamiento de solicitudes en el proyecto.
    -MySQL:  En la gestión de la base de datos.


Explicación del proceso
  >Solicitud de turno
    -El usuario rellena un formulario para solicitar un turno y lo envía al servidor.
    -Los datos se procesan y se inserta como un nuevo registro dentro de la tabla "cliente" con el estado 'enviado'.
  
  >Gestión de turno
    -El administrador inicia sesión en la página.
    -Accede al panel de control de los turnos solicitados.
    -El administrador puede cambiar el estado de los turnos ('aprobado', 'en proceso', 'finalizado' o 'cancelado'.)
    -Luego la base de datos se actualiza con los nuevos estados.

  >Respuesta al usuario
    -El usuario será notificado por el personal de trabajo.
    -El usuario puede revisar el estado de su turno en todo momento desde la web.
