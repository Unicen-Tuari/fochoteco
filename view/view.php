<?php

REQUIRE_ONCE ('libs/Smarty.class.php');

  class View
  {
    private $smarty;
    private $error;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->error = array();
    $novedades = array(
      "0" => array(
        "id_novedad" => 1,
        "titulo" => "Facebook abre su plataforma a vídeos de 360 grados",
        "descripcion" => "La compañía estadounidense Facebook anunció este miércoles que los usuarios podrán empezar a reproducir en esa red social vídeos filmados en 360 grados, un avance que estará disponible en primer lugar en los dispositivos iOS de Apple a lo largo de los próximos meses y de forma progresiva.",
        "noticia" => "La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo.",
        "fecha_publicacion" => "Hoy guachin lo publique",
        "nombre_categoria" => "Categoria disenio",
        "imagenes" => array(
          "0" => "images/novedades/facebook_novedad.jpg"
      )
      ),
      "1" => array(
        "id_novedad" => 2,
        "titulo" => "Instagram alcanza los 400 millones de usuarios",
        "descripcion" => "Instagram, la reotografía propiedad de Facebook, ha anunciado que tiene 400 millones de usuarios, 100 millones más que el pasado mes de enero. Esos 400 millones de usuarios, el 75% de los cuales vive fuera de Estados Unidos, suben cada día 80 millones de imágenes a la plataforma.",
        "noticia" => "Con este crecimiento en número de usuarios, Instagram ya supera a Twitter, pues la red de microblogging tiene 316 millones de cuentas activas. En un comunicado, la red de fotografía ha detallado que los países que mayor número de usuarios han aportado en los últimos 9 meses han sido Brasil, Japón e Indonesia. La red de fotografías destaca algunos de sus grandes hitos de los últimos meses, como la primera imagen de la superficie de Plutón o Messi y su celebración de la Champions League, e impactantes y bellas fotos como las piscinas heladas de Turquía y la ciudad fantasma del desierto de Namibia. Entre las celebridades que se han unido recientemente a la red, Instagram destaca al futbolista David Beckham.Instagram, la plataforma para compartir fotografías y vídeos con filtros, nació el 6 de octubre de 2010 y en 2012 fue adquirida por Facebook, que pagó por ella 765 millones de euros. Foto: Instagram - Foto de Shutterstock La(s) imágen(es) utilizadas en esta nota pertenecen a Shuterstock y se prohibe su distribución.",
        "fecha_publicacion" => "Hoy sadfafafwqerguachin lo publique",
        "nombre_categoria" => "Categoria: Redes sociales",
        "imagenes" => array(
          "0" => "images/novedades/instagram_novedad.jpg"
      )
      ),
      "2" => array(
        "id_novedad" => 3,
        "titulo" => "Groupon recortará más de 1.000 empleos y cerrará en 7 países",
        "descripcion" => "La compañía de venta de cupones en Internet Groupon ha anunciado severos recortes en su estructura fuera de su país de origen, Estados Unidos, que afectarán tanto a su plantilla de trabajadores como a su fuerte presencia internacional.",
        "noticia" => "La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo.",
        "fecha_publicacion" => "Hoy guachin lo publique",
        "nombre_categoria" => "Categoria disenio",
        "imagenes" => array(
          "0" => "images/novedades/groupon_novedad.jpg"
      )
      ),
      "3" => array(
        "id_novedad" => 4,
        "titulo" => "Facebook creará un botón para expresar emociones más allá de me gusta",
        "descripcion" => "El fundador y consejero delegado de Facebook, Mark Zuckerberg, dijo este martes que la red social está diseñando una opción que permita a los usuarios expresar sus emociones más allá de la opción de me gusta.",
        "noticia" => "Con este crecimiento en número de usuarios, Instagram ya supera a Twitter, pues la red de microblogging tiene 316 millones de cuentas activas. En un comunicado, la red de fotografía ha detallado que los países que mayor número de usuarios han aportado en los últimos 9 meses han sido Brasil, Japón e Indonesia. La red de fotografías destaca algunos de sus grandes hitos de los últimos meses, como la primera imagen de la superficie de Plutón o Messi y su celebración de la Champions League, e impactantes y bellas fotos como las piscinas heladas de Turquía y la ciudad fantasma del desierto de Namibia. Entre las celebridades que se han unido recientemente a la red, Instagram destaca al futbolista David Beckham.Instagram, la plataforma para compartir fotografías y vídeos con filtros, nació el 6 de octubre de 2010 y en 2012 fue adquirida por Facebook, que pagó por ella 765 millones de euros. Foto: Instagram - Foto de Shutterstock La(s) imágen(es) utilizadas en esta nota pertenecen a Shuterstock y se prohibe su distribución.",
        "fecha_publicacion" => "Hoy sadfafafwqerguachin lo publique",
        "nombre_categoria" => "Categoria: Redes sociales",
        "imagenes" => array(
          "0" => "images/novedades/facebook2_novedad.jpg"
      )
      ),
      "4" => array(
        "id_novedad" => 5,
        "titulo" => "Facebook abre su plataforma a vídeos de 360 grados",
        "descripcion" => "La compañía estadounidense Facebook anunció este miércoles que los usuarios podrán empezar a reproducir en esa red social vídeos filmados en 360 grados, un avance que estará disponible en primer lugar en los dispositivos iOS de Apple a lo largo de los próximos meses y de forma progresiva. La compañía estadounidense Facebook anunció este miércoles que los usuarios podrán empezar a reproducir en esa red social vídeos filmados en 360 grados, un avance que estará disponible en primer lugar en los dispositivos iOS de Apple a lo largo de los próximos meses y de forma progresiva.",
        "noticia" => "La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo. La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo.",
        "fecha_publicacion" => "Hoy guachin lo publique",
        "nombre_categoria" => "Categoria disenio",
        "imagenes" => array(
          "0" => "images/novedades/facebook_novedad.jpg"
      )
      ),
      "5" => array(
        "id_novedad" => 6,
        "titulo" => "Instagram alcanza los 400 millones de usuarios",
        "descripcion" => "Instagram, la red social de fotografía propiedad de Facebook, ha anunciado que tiene 400 millones de usuarios, 100 millones más que el pasado mes de enero. Esos 400 millones de usuarios, el 75% de los cuales vive fuera de Estados Unidos, suben cada día 80 millones de imágenes a la plataforma.",
        "noticia" => "Con este crecimiento en número de usuarios, Instagram ya supera a Twitter, pues la red de microblogging tiene 316 millones de cuentas activas. En un comunicado, la red de fotografía ha detallado que los países que mayor número de usuarios han aportado en los últimos 9 meses han sido Brasil, Japón e Indonesia. La red de fotografías destaca algunos de sus grandes hitos de los últimos meses, como la primera imagen de la superficie de Plutón o Messi y su celebración de la Champions League, e impactantes y bellas fotos como las piscinas heladas de Turquía y la ciudad fantasma del desierto de Namibia. Entre las celebridades que se han unido recientemente a la red, Instagram destaca al futbolista David Beckham.Instagram, la plataforma para compartir fotografías y vídeos con filtros, nació el 6 de octubre de 2010 y en 2012 fue adquirida por Facebook, que pagó por ella 765 millones de euros. Foto: Instagram - Foto de Shutterstock La(s) imágen(es) utilizadas en esta nota pertenecen a Shuterstock y se prohibe su distribución.",
        "fecha_publicacion" => "Hoy sadfafafwqerguachin lo publique",
        "nombre_categoria" => "Categoria: Redes sociales",
        "imagenes" => array(
          "0" => "images/novedades/instagram_novedad.jpg"
      )
      ),
      "6" => array(
        "id_novedad" => 7,
        "titulo" => "Facebook abre su plataforma a vídeos de 360 grados",
        "descripcion" => "La compañía estadounidense Facebook anunció este miércoles que los usuarios podrán empezar a reproducir en esa red social vídeos filmados en 360 grados, un avance que estará disponible en primer lugar en los dispositivos iOS de Apple a lo largo de los próximos meses y de forma progresiva. La compañía estadounidense Facebook anunció este miércoles que los usuarios podrán empezar a reproducir en esa red social vídeos filmados en 360 grados, un avance que estará disponible en primer lugar en los dispositivos iOS de Apple a lo largo de los próximos meses y de forma progresiva.",
        "noticia" => "La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo. La decisión de Facebook acerca así su popular plataforma a la experiencia de realidad virtual que emplea su filial Oculus, especializada en vídeos que permiten introducirse en un contexto enteramente digital con el uso de un sistema de gafas y audio envolvente. Gracias a que las grabaciones en 360 recogen lo que ocurre en un entorno en todas direcciones en un momento dado, los usuarios podrán elegir qué ángulo quieren ver durante la proyección, una elección que en la aplicación de Facebook se puede hacer con un gesto con el dedo o simplemente moviendo el dispositivo hacia el lugar de interés. Facebook confirmó que estos vídeos estarán disponibles más adelante para quienes accedan a ellos desde su portal de internet o a través de sistemas Android. Actualmente, compañías como Discovery, GoPro o VICE ya ofrecen vídeos en 360 en Facebook, así como Lebron James & Uninterrupted, Saturday Night Live y Star Wars. Por el momento, la empresa de Mark Zuckerberg ha limitado la oferta de vídeos en 360 a una serie de producciones pero indicó que en los próximos días habrá vídeos de creativos de todas partes del mundo.",
        "fecha_publicacion" => "Hoy guachin lo publique",
        "nombre_categoria" => "Categoria disenio",
        "imagenes" => array(
          "0" => "images/novedades/facebook_novedad.jpg"
      )
      ),
      "7" => array(
        "id_novedad" => 8,
        "titulo" => "Instagram alcanza los 400 millones de usuarios",
        "descripcion" => "Instagram, la red social de fotografía propiedad de Facebook, ha anunciado que tiene 400 millones de usuarios, 100 millones más que el pasado mes de enero. Esos 400 millones de usuarios, el 75% de los cuales vive fuera de Estados Unidos, suben cada día 80 millones de imágenes a la plataforma.",
        "noticia" => "Con este crecimiento en número de usuarios, Instagram ya supera a Twitter, pues la red de microblogging tiene 316 millones de cuentas activas. En un comunicado, la red de fotografía ha detallado que los países que mayor número de usuarios han aportado en los últimos 9 meses han sido Brasil, Japón e Indonesia. La red de fotografías destaca algunos de sus grandes hitos de los últimos meses, como la primera imagen de la superficie de Plutón o Messi y su celebración de la Champions League, e impactantes y bellas fotos como las piscinas heladas de Turquía y la ciudad fantasma del desierto de Namibia. Entre las celebridades que se han unido recientemente a la red, Instagram destaca al futbolista David Beckham.Instagram, la plataforma para compartir fotografías y vídeos con filtros, nació el 6 de octubre de 2010 y en 2012 fue adquirida por Facebook, que pagó por ella 765 millones de euros. Foto: Instagram - Foto de Shutterstock La(s) imágen(es) utilizadas en esta nota pertenecen a Shuterstock y se prohibe su distribución.",
        "fecha_publicacion" => "Hoy sadfafafwqerguachin lo publique",
        "nombre_categoria" => "Categoria: Redes sociales",
        "imagenes" => array(
          "0" => "images/novedades/instagram_novedad.jpg"
      )
      ),
    );

    $this->smarty->assign("novedades", $novedades);
  }

  function showTemplate($section)
  {
    $this->smarty->display($section .'.tpl');
  }
  }


?>
