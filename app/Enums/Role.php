<?php
namespace App\Enums;

enum Role: int
{

    case SuperAdmin = 1;
    case PharmaceuticalManager = 2;
    case PatientManager = 3;
    case AssistanceServiceManager = 4;
    case MarketingManager = 5;
    case User = 6;
    case Guest = 7;

//     - Super administrator
// - Pharmaceutical manager
// - Patient manager
// - Assistance service manager
// - Marketing manager

}
