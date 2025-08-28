<?php

namespace App\Enums;

enum AppointmentStatus: string
{
    case PENDENTE    = 'pendente';
    case CONFIRMADO  = 'confirmado';
    case CANCELADO   = 'cancelado';
    case REMARCADO   = 'remarcado';
    case FINALIZADO  = 'finalizado';
}