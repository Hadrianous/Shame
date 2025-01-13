<?php

namespace App\Domain\Entity;

enum Status: string
{
    case ASSEMBLING = "Assembling";
    case PAINT_IN_PROGRESS = "Paint in progress";
    case BASING = "Basing";
    case DONE = "Done";
}
