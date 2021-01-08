<?php
    include_once("Product_Data_from_Home_Page.php");
    class RenderMini
    {
        private $Info;

        public function __construct($Jutr)
        {
            $this->Info = new Info
            (
                $Jutr->GetName(),
                $Jutr->GetPlace(),
                $Jutr->GetTime(),
                $Jutr->GetImage(),
                $Jutr->GetPrice(),
                $Jutr->GetTopic(),
                $Jutr->GetInfMore(),
                $Jutr->GetClicks()
            );
        }

        public function Render()
        {
            return '
                        <div class="sell">
                            <a style="text-decoration: none; color: black;" href="Product_Page.php?id='.$this->Info->GetName().'">
                                <img class="im" src="'.$this->Info->GetImage().'"/>'.($this->Info->GetTopic()=="true"?'<div class="top">ТОП</div>':'<div></div>').'
                                <div style="font-size: 21px; float: left; width: 40%;">'.$this->Info->GetName().'</div>
                                <div style="margin-left: 70%;">'.$this->Info->GetPrice().'</div>
                                <div style="font-size: 19px; margin-top: 150px; margin-left: 145px;">'. $this->Info->GetPlace() .' '.$this->Info->GetTime().'</div>
                            </a>
                        </div>
                        </br></br>
                    ';
        }

        public function GetInfo()
        {
            return $this->Info;
        }
    }
?>