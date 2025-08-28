<?php

namespace App\Enums;

enum AppointmentReason: string
{
    case CONSULTA   = 'consulta';
    case VACINA    = 'vacina';
    case EMERGENCIA = 'emergencia';
    case RETORNO   = 'retorno';
    case EXAME     = 'exame';
}