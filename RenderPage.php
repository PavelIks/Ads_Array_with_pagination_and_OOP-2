<?php
    include_once ("RenderMini.php");
    class RenderPage
    {
        private $masMini=[];

        public function __construct($masInfo5)
        {
            for($h=0;$h<count($masInfo5);$h++)
            {
                array_push($this->masMini,new RenderMini($masInfo5[$h]));
            }
        }

        public function Render()
        {
            $forreturn='';
            for ($k = 0; $k < count($this->masMini); $k++)
            {
                $forreturn=$forreturn.$this->masMini[$k]->Render();
            }
            return $forreturn;
        }

        public function GetMas()
        {
            return $this->masMini;
        }
    }
?>