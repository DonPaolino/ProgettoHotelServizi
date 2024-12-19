<?php

namespace Progettohotel\GestioneHotel\prenotazioni;

use Progettohotel\GestioneHotel\prenotazioni\PrenotazioneBase;

class PrenotazioneStandard extends PrenotazioneBase
{
    public function calcolaCostoTotale(): float
    {
        $costoBase = $this->prezzoBase * $this->notti;
        $costoServizi = 0.0;

        foreach ($this->servizi as $servizio) {
            $costoServizi += $servizio->calcolaCosto($this->notti);
        }

        return $costoBase + $costoServizi;
    }
}

?>
