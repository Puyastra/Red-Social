
    <?php

        class Posts
        {
            private $titulo;
            private $descripcion;
            private $hastags;
            private $likes;
    
            public function __construct($titulo, $descripcion, $hastags = [], $likes)
            {
                $this->titulo = $titulo;
                $this->descripcion = $descripcion;
                $this->hastags = $hastags;
                $this->likes= $likes;
            }
    
            public function getTitulo()
            {
                return $this->titulo;
            }
    
            public function getDescripcion()
            {
                return $this->descripcion;
            }
            public function getHastags(){
                return $this->hastags;
            }

            public function getLikes(){
                return $this->likes;
            }
        }

        function SacarPost(){
            $posts = [
                new Posts("Un video ma migente pa peldel el tiempo","Don pollo fue a comer un pollo y se lo comio - epic vlog 2014 Tomorrowland EPIC VLOG",["donpollo","EPIC","MercadonaAD"],33), 
                new Posts("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA AGRIA","Muy buenas criaturitas del señor, efectivamente. Maikel yordan ha venido a mi cumpleaños, parece mentira pero es la true xioa fong shu",["maikel","yordan","true"],27),
                new Posts("Krill sa matao o es fake?.ft Dalas Review, JaviOliveira","Dicen que Krill ha cogio un pedrolo y se lo ha estampao en la cabeza. Fuentes afirman que fue premeditado para huir del pais e irse al triangulo de las bermudas para dar volteretas con jimmy stuarts y mr tartaria. Gurús que se especula salieron de la matrix, totalemnte real 100% fake.",["fake","todo es mentira","UnDesalojoOtraOkupacion","AyudaMeSecuestran","UnAplausoSeñore","JavaScrypt>Python","no se(nose(nose))"],4235234523)
            ];
            return $posts;
        }
    ?>
