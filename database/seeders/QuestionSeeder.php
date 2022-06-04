<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            [
                "id" => 1,
                "question_name" => "¿En qué país europeo está el río Támesis?",
                "category_id" => 1,
            ],
            [
                "id" => 2,
                "question_name" => "¿Cuáles son los límites de Europa por el este?",
                "category_id" => 1,
            ],
            [
                "id" => 3,
                "question_name" => "¿Cuál es la capital de Portugal?",
                "category_id" => 1,
            ],
            [
                "id" => 4,
                "question_name" => "¿Qué país de Europa limita con más países?",
                "category_id" => 1,
            ],
            [
                "id" => 5,
                "question_name" => "¿En qué país de Europa se encuentra el río Vístula?",
                "category_id" => 1,
            ],
            [
                "id" => 6,
                "question_name" => "¿Cuál es la capital de los Países Bajos?",
                "category_id" => 1,
            ],
            [
                "id" => 7,
                "question_name" => "¿Cómo se llama el pico más alto de Europa?",
                "category_id" => 1,
            ],
            [
                "id" => 8,
                "question_name" => "¿Cuál es el estado más grande de los Estados Unidos?",
                "category_id" => 1,
            ],
            [
                "id" => 9,
                "question_name" => "¿En qué país puedes visitar el Machu Picchu?",
                "category_id" => 1,
            ],
            [
                "id" => 10,
                "question_name" => "¿Cuál es el país más grande de América del Sur?",
                "category_id" => 1,
            ],
            [
                "id" => 11,
                "question_name" => "¿Cuál es la capital de Suiza?",
                "category_id" => 1,
            ],
            [
                "id" => 12,
                "question_name" => "El río Rin pasa por uno de estos países ¿cuál?",
                "category_id" => 1,
            ],
            [
                "id" => 13,
                "question_name" => "¿Cuántos países tiene África?",
                "category_id" => 1,
            ],
            [
                "id" => 14,
                "question_name" => "¿Cuál es el continente más poblado de la tierra?",
                "category_id" => 1,
            ],
            [
                "id" => 15,
                "question_name" => "¿Cuántos continentes hay en la Tierra?",
                "category_id" => 1,
            ],
            [
                "id" => 16,
                "question_name" => "Cuál es la representación gráfica del número nueve mil treinta y seis.",
                "category_id" => 2,
            ],
            [
                "id" => 17,
                "question_name" => "A cuántas unidades equivale 10 decenas de millar.",
                "category_id" => 2,
            ],
            [
                "id" => 18,
                "question_name" => "Aproxima el número 58 a la decena.",
                "category_id" => 2,
            ],
            [
                "id" => 19,
                "question_name" => "Escribe el número ordinal trigésimo quinto en cifras.",
                "category_id" => 2,
            ],
            [
                "id" => 20,
                "question_name" => "Qué cantidad expresa el número romano V.",
                "category_id" => 2,
            ],
            [
                "id" => 21,
                "question_name" => "Qué número resulta si divides 56 entre 7.",
                "category_id" => 2,
            ],
            [
                "id" => 22,
                "question_name" => "Cuál es el número anterior a 1000.",
                "category_id" => 2,
            ],
            [
                "id" => 23,
                "question_name" => "Cómo escribirías en cifras seiscientos veinticinco mil doscientos dos.  ¿qué tienes que hacer?",
                "category_id" => 2,
            ],
            [
                "id" => 24,
                "question_name" => "Para calcular cuánto es un tercio de 3996",
                "category_id" => 2,
            ],
            [
                "id" => 25,
                "question_name" => "Cómo se llama el polígono de siete lados.",
                "category_id" => 2,
            ],
            [
                "id" => 26,
                "question_name" => "Cuál es el nombre del triángulo que tiene dos lados iguales y uno desigual",
                "category_id" => 2,
            ],
            [
                "id" => 27,
                "question_name" => "Cuántos metros es un hectómetro.",
                "category_id" => 2,
            ],
            [
                "id" => 28,
                "question_name" => "Expresa 7 kg y 670 g en gramos.",
                "category_id" => 2,
            ],
            [
                "id" => 29,
                "question_name" => "Qué hora es si tanto la manecilla pequeña del reloj como la grande están en las 3.",
                "category_id" => 2,
            ],
            [
                "id" => 30,
                "question_name" => "Cuál es el resultado de multiplicar 7x9.",
                "category_id" => 2,
            ],
            [
                "id" => 31,
                "question_name" => "¿De qué nacionalidad era Juana de Arco?",
                "category_id" => 3,
            ],
            [
                "id" => 32,
                "question_name" => "¿Qué famoso filósofo fue maestro de Alejandro Magno durante cinco años?",
                "category_id" => 3,
            ],
            [
                "id" => 33,
                "question_name" => "¿En qué año descubrió Colón América?",
                "category_id" => 3,
            ],
            [
                "id" => 34,
                "question_name" => "¿En qué guerra participó Juana de Arco?",
                "category_id" => 3,
            ],
            [
                "id" => 35,
                "question_name" => "¿Cuál era la capital del Imperio Inca?",
                "category_id" => 3,
            ],
            [
                "id" => 36,
                "question_name" => "¿Cuándo se produjo principalmente el Siglo de Oro?",
                "category_id" => 3,
            ],
            [
                "id" => 37,
                "question_name" => "¿Cómo se llamaba el padre de Alejandro Magno?",
                "category_id" => 3,
            ],
            [
                'id' => 38,
                'question_name' => '¿De qué año es "la Pepa", la primera Constitución española?',
                'category_id' => 3,
            ],
            [
                "id" => 39,
                "question_name" => "¿Quién fue el primer emperador romano?",
                "category_id" => 3,
            ],
            [
                "id" => 40,
                "question_name" => "¿Qué Rey encargó Las Meninas?",
                "category_id" => 3,
            ],
            [
                "id" => 41,
                "question_name" => "¿Cómo se llamaba el cañón alemán más famoso de la I Guerra Mundial?",
                "category_id" => 3,
            ],
            [
                "id" => 42,
                "question_name" => "¿En qué país nació Adolf Hitler?",
                "category_id" => 3,
            ],
            [
                "id" => 43,
                "question_name" => "¿Qué faraón era el marido de Nefertiti?",
                "category_id" => 3,
            ],
            [
                "id" => 44,
                "question_name" => "¿Cómo se llamó durante más de 50 años San Petersburgo?",
                "category_id" => 3,
            ],
            [
                "id" => 45,
                "question_name" => "¿En qué isla murió Napoleón?",
                "category_id" => 3,
            ],
            [
                "id" => 46,
                "question_name" => "Las características del sonido son",
                "category_id" => 4,
            ],
            [
                "id" => 47,
                "question_name" => "¿Cuáles son los tipos de ecosistemas que existen?",
                "category_id" => 4,
            ],
            [
                "id" => 48,
                "question_name" => "A que tipo de ecosistema pertenecen los océanos y mares los ríos lagos y lagunas  y hasta los charcos",
                "category_id" => 4,
            ],
            [
                "id" => 49,
                "question_name" => "A que tipo de ecosistema pertenecen un bosque de coníferas  un desierto una selva y un tronco caído",
                "category_id" => 4,
            ],
            [
                "id" => 50,
                "question_name" => "Está compuesto de organismos de una misma especie que viven en un ecosistema  en un lugar y tiempo determinado",
                "category_id" => 4,
            ],
            [
                "id" => 51,
                "question_name" => "De las siguientes opciones una cadena alimenticia es un buen ejemplo de relaciones entre",
                "category_id" => 4,
            ],
            [
                "id" => 52,
                "question_name" => "Las dos nuevas partículas atómicas recientemente descubiertas son",
                "category_id" => 4,
            ],
            [
                "id" => 53,
                "question_name" => "Para que los ecosistemas mantengan su equilibrio tienen que",
                "category_id" => 4,
            ],
            [
                "id" => 54,
                "question_name" => "Para que los ecosistemas mantengan su equilibrio tienen que",
                "category_id" => 4,
            ],
            [
                "id" => 55,
                "question_name" => "La ecuación química general 6CO2+H2O- Energía Radiante C 6H12 O6 + H2 O + O2. Es el proceso de",
                "category_id" => 4,
            ],
            [
                "id" => 56,
                "question_name" => "El proceso por medio del cual se originan los espermatozoides es",
                "category_id" => 4,
            ],
            [
                "id" => 57,
                "question_name" => "La función de los carbohidratos en el cuerpo humano es:",
                "category_id" => 4,
            ],
            [
                "id" => 58,
                "question_name" => "El proceso que da origen a los óvulos es",
                "category_id" => 4,
            ],
            [
                "id" => 59,
                "question_name" => "El número de espermatozoides eyaculados en el hombre fértil y normal es",
                "category_id" => 4,
            ],
            [
                "id" => 60,
                "question_name" => "La presión hidrostática es",
                "category_id" => 4,
            ],
            [
                "id" => 61,
                "question_name" => "¿Cuántos Km de distancia mide una maratón?",
                "category_id" => 5,
            ],
            [
                "id" => 62,
                "question_name" => "¿Cuáles son los cinco colores del anillo de los Juegos Olímpicos?",
                "category_id" => 5,
            ],
            [
                "id" => 63,
                "question_name" => "¿Cuántas veces Michael Jordan ganó campeonatos para los Chicago Bulls?",
                "category_id" => 5,
            ],
            [
                "id" => 64,
                "question_name" => "¿Qué deporte tiene un equipo llamado foil?",
                "category_id" => 5,
            ],
            [
                "id" => 65,
                "question_name" => "¿Por qué deporte son conocidos los Cachorros de Chicago y los Medias Rojas de Boston?",
                "category_id" => 5,
            ],
            [
                "id" => 66,
                "question_name" => "¿Qué deporte de los Juegos Olímpicos implica pliegues y picas?",
                "category_id" => 5,
            ],
            [
                "id" => 67,
                "question_name" => "¿Manny Pacquiao es un boxeador legendario de qué país?",
                "category_id" => 5,
            ],
            [
                "id" => 68,
                "question_name" => "¿Cómo se llama Tyson Fury?",
                "category_id" => 5,
            ],
            [
                "id" => 69,
                "question_name" => "¿Cuánto dura un round típico de boxeo para hombres?",
                "category_id" => 5,
            ],
            [
                "id" => 70,
                "question_name" => "¿Cuántos puntos vale un tiro libre en baloncesto?",
                "category_id" => 5,
            ],
            [
                "id" => 71,
                "question_name" => "¿Cada cuántos años se realizan los Juegos Olímpicos?",
                "category_id" => 5,
            ],
            [
                "id" => 72,
                "question_name" => "¿Qué parte de tu cuerpo no debe tocar el balón en el fútbol?",
                "category_id" => 5,
            ],
            [
                "id" => 73,
                "question_name" => "¿Cuál es el significado de NBA?",
                "category_id" => 5,
            ],
            [
                "id" => 74,
                "question_name" => "En baloncesto  el jugador que trae la pelota al otro lado de la cancha y corre la ofensiva se llama:",
                "category_id" => 5,
            ],
            [
                "id" => 75,
                "question_name" => "¿Cómo llamas a la cancha de fútbol?",
                "category_id" => 5,
            ],
            [
                "id" => 76,
                "question_name" => "¿Qué tecnología se utiliza para hacer posibles las llamadas telefónicas a través de Internet?",
                "category_id" => 6,
            ],
            [
                "id" => 77,
                "question_name" => "¿Qué lenguaje informático es el más utilizado?",
                "category_id" => 6,
            ],
            [
                "id" => 78,
                "question_name" => "¿Cuál es la red social más usada del mundo?",
                "category_id" => 6,
            ],
            [
                "id" => 79,
                "question_name" => "Para qué sirve un Código QR",
                "category_id" => 6,
            ],
            [
                "id" => 80,
                "question_name" => "¿Quién inventó Google?",
                "category_id" => 6,
            ],
            [
                "id" => 81,
                "question_name" => "Para qué sirve la plataforma iVoox",
                "category_id" => 6,
            ],
            [
                "id" => 82,
                "question_name" => "Qué uso tiene la inteligencia artificial",
                "category_id" => 6,
            ],
            [
                "id" => 83,
                "question_name" => "Qué hace el ordenador si pulsas Control + Z:",
                "category_id" => 6,
            ],
            [
                "id" => 84,
                "question_name" => "¿Cuál es la página de Internet más visitada del mundo?",
                "category_id" => 6,
            ],
            [
                "id" => 85,
                "question_name" => "¿Cuándo se fundó Nintendo?",
                "category_id" => 6,
            ],
            [
                "id" => 86,
                "question_name" => "¿Qué significa la abreviatura WWW?",
                "category_id" => 6,
            ],
            [
                "id" => 87,
                "question_name" => "Para qué sirve un hashtag",
                "category_id" => 6,
            ],
            [
                "id" => 88,
                "question_name" => "Para clasificar contenido en las redes sociales",
                "category_id" => 6,
            ],
            [
                "id" => 89,
                "question_name" => "Con qué aplicación realizarías una videoconferencia",
                "category_id" => 6,
            ],
            [
                "id" => 90,
                "question_name" => "Para qué sirve Bizum",
                "category_id" => 6,
            ],
            [
                "id" => 91,
                "question_name" => "¿Cómo se llamaba el personaje que interpretaba John Travolta en Grease?",
                "category_id" => 7,
            ],
            [
                "id" => 92,
                "question_name" => "¿En qué año se estrenó la película de Disney Pinocho?",
                "category_id" => 7,
            ],
            [
                "id" => 93,
                "question_name" => "¿Cuál es el verdadero nombre de Alejandro Sanz?",
                "category_id" => 7,
            ],
            [
                "id" => 94,
                "question_name" => "¿Quién es la mascota de SEGA?",
                "category_id" => 7,
            ],
            [
                "id" => 95,
                "question_name" => "¿Cuántos premios Grammy ha ganado Britney Spears?",
                "category_id" => 7,
            ],
            [
                "id" => 96,
                "question_name" => "¿Como se llaman dos intimas amigas de la serie de televisión Gossip Girl que siempre discuten y se traicionan?",
                "category_id" => 7,
            ],
            [
                "id" => 97,
                "question_name" => "¿A qué película de Disney pertenece la canción Un mundo ideal?",
                "category_id" => 7,
            ],
            [
                "id" => 98,
                "question_name" => "¿Qué actor rechazó el papel de Michael Corleone en la película '¿El Padrino', finalmente interpretado por Al Pacino?",
                "category_id" => 7,
            ],
            [
                "id" => 99,
                "question_name" => "¿Cómo se llama el protagonista de la saga Indiana Jones?",
                "category_id" => 7,
            ],
            [
                "id" => 100,
                "question_name" => "¿Qué animal es la mascota de Jazmín en Aladdin?",
                "category_id" => 7,
            ],
            [
                "id" => 101,
                "question_name" => "¿A quién se considera el Rey del Pop?",
                "category_id" => 7,
            ],
            [
                "id" => 102,
                "question_name" => "¿Qué día es San Valentín?",
                "category_id" => 7,
            ],
            [
                "id" => 103,
                "question_name" => "¿Cómo se llama el actor protagonista de  Solo en casa?",
                "category_id" => 7,
            ],
            [
                "id" => 104,
                "question_name" => "¿Qué personaje de Disney perdió su zapato de cristal?",
                "category_id" => 7,
            ],
            [
                "id" => 105,
                "question_name" => "¿Cuántos colores tiene un cubo de Rubik clásico?",
                "category_id" => 7,
            ],
            [
                "id" => 106,
                "question_name" => "¿Quién interpreta la canción Baby One More Time ?",
                "category_id" => 8,
            ],
            [
                "id" => 107,
                "question_name" => "¿Cuál de ellas es una cantante española?",
                "category_id" => 8,
            ],
            [
                "id" => 108,
                "question_name" => "¿Cómo se llama el musical que estrenó en 2013 el grupo Hombres G?",
                "category_id" => 8,
            ],
            [
                "id" => 109,
                "question_name" => "¿Quién canta  Vivir mi vida?",
                "category_id" => 8,
            ],
            [
                "id" => 110,
                "question_name" => "¿De dónde era la cantante Rocío Jurado?",
                "category_id" => 8,
            ],
            [
                "id" => 111,
                "question_name" => "¿Cuál es el nombre de Paul McCartney?",
                "category_id" => 8,
            ],
            [
                "id" => 112,
                "question_name" => "¿Cuál es la discográfica destintiva de la música soul?",
                "category_id" => 8,
            ],
            [
                "id" => 113,
                "question_name" => "¿Qué banda de Heavy Metal lanzó un disco de colaboración con el recientemente fallecido Lou Reed?",
                "category_id" => 8,
            ],
            [
                "id" => 114,
                "question_name" => "¿Qué Beatle fue asesinado por un fan?",
                "category_id" => 8,
            ],
            [
                "id" => 115,
                "question_name" => "¿Qué grupo interpretaba la canción  Smells like teen spirit ?",
                "category_id" => 8,
            ],
            [
                "id" => 116,
                "question_name" => "¿En qué banda canta Anthony Kiedis?",
                "category_id" => 8,
            ],
            [
                "id" => 117,
                "question_name" => "¿Cuál fue el primer festival de rock gratuito en durar más de 3 días en 1969?",
                "category_id" => 8,
            ],
            [
                "id" => 118,
                "question_name" => "¿Dónde se celebra el festival de música  Alhambra Sound ?",
                "category_id" => 8,
            ],
            [
                "id" => 119,
                "question_name" => "¿Con qué grupo comenzó a tener éxito Eric Clapton?",
                "category_id" => 8,
            ],
            [
                "id" => 120,
                "question_name" => "¿De dónde proviene el reggae?",
                "category_id" => 8,
            ],
            [
                "id" => 121,
                "question_name" => "¿Cuál fue primero?",
                "category_id" => 9,
            ],
            [
                "id" => 122,
                "question_name" => "¿Cómo se llama el hermano de Mario Bros?",
                "category_id" => 9,
            ],
            [
                "id" => 123,
                "question_name" => "¿Cuántos luchadores hay en Street Fighter II?",
                "category_id" => 9,
            ],
            [
                "id" => 124,
                "question_name" => "¿Cuántas entradas para mandos tiene Nintendo 64?",
                "category_id" => 9,
            ],
            [
                "id" => 125,
                "question_name" => "¿Cuál es un videojuego de autos de carrera?",
                "category_id" => 9,
            ],
            [
                "id" => 126,
                "question_name" => "¿Cómo se llama el enemigo de Sonic?",
                "category_id" => 9,
            ],
            [
                "id" => 127,
                "question_name" => "¿Cuál fue la primera consola de PlayStation?",
                "category_id" => 9,
            ],
            [
                "id" => 128,
                "question_name" => "¿Cuál es el material de la primera espada que recibes en The Legend of Zelda?",
                "category_id" => 9,
            ],
            [
                "id" => 129,
                "question_name" => "¿Cuál de estas consolas pertenece a la compañía Sony?",
                "category_id" => 9,
            ],
            [
                "id" => 130,
                "question_name" => "¿Cómo se llama la ciudad en la que desenvuelve Resident Evil?",
                "category_id" => 9,
            ],
            [
                "id" => 131,
                "question_name" => "¿Qué instrumento de viento suele usar Link de The Legend of Zelda?",
                "category_id" => 9,
            ],
            [
                "id" => 132,
                "question_name" => "¿De qué personaje busca venganza Kratos en God of war?",
                "category_id" => 9,
            ],
            [
                "id" => 133,
                "question_name" => "¿Cómo se llama la institución mental que sirve de escenario a Outlast?",
                "category_id" => 9,
            ],
            [
                "id" => 134,
                "question_name" => "¿Cómo se llama el protagonista de Halo?",
                "category_id" => 9,
            ],
            [
                "id" => 135,
                "question_name" => "¿En qué año fue lanzado Super Mario 64?",
                "category_id" => 9,
            ],
            [
                "id" => 136,
                "question_name" => "¿Qué es “lag”?",
                "category_id" => 9,
            ],
        ]);
    }
}
