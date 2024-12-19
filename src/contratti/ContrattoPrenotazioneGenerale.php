<?php

namespace Progettohotel\GestioneHotel\contratti;

interface ContrattoPrenotazioneGenerale
{
    public function calcolaCosto(int $notti): float;
}

?>