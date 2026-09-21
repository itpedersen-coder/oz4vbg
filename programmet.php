<?php

class Evning
{
    public int $id;
    public string $name;
    public DateTime $date;

    public function __construct(int $id, string $name, DateTime $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
    }

    public function __toString()
    {
        return $this->id . " " . $this->name . " ";
    }
}

$program = [];
$next_evning_id = 0;

//General forsamling falder i 1. klubaften i januar

//Nyeste i tid nederst
// array_push($program, new Evning( 1, "Generalforsamling med dagsorden ifølge vedtægterne" , DateTime::createFromFormat('d-m-Y H:i', "29-1-2025 20:00") ));
// array_push($program, new Evning( 1, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "26-2-2025 20:00") ));
// array_push($program, new Evning( 1, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "26-3-2025 20:00") ));
// array_push($program, new Evning( 1, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "30-4-2025 20:00") ));
// array_push($program, new Evning( 1, "Sommerafslutning" , DateTime::createFromFormat('d-m-Y H:i', "28-5-2025 20:00") ));

//array_push($program, new Evning( 1, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "27-8-2025 20:00") ));
//array_push($program, new Evning( 2, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "24-9-2025 20:00") ));
//array_push($program, new Evning( 3, "Klubaften - Foredrag omkring <a href=\"https://rfzero.net\" target=_new>RFzero</a> ved OZ5N Steen" , DateTime::createFromFormat('d-m-Y H:i', "29-10-2025 20:00") ));
//array_push($program, new Evning( 5, "Klubaften - juleafslutning" , DateTime::createFromFormat('d-m-Y H:i', "26-11-2025 20:00") ));

// array_push($program, new Evning( 1, "Generalforsamling med dagsorden ifølge vedtægterne" , DateTime::createFromFormat('d-m-Y H:i', "28-1-2026 20:00") ));
// array_push($program, new Evning( 2, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "25-2-2026 20:00") ));
// array_push($program, new Evning( 3, "Klubaften" , DateTime::createFromFormat('d-m-Y H:i', "25-3-2026 20:00") ));
// array_push($program, new Evning( 4, "85års Jubilærum for OZ4VBG - Spisning på Flammen. Tilmelding påkrævet." , DateTime::createFromFormat('d-m-Y H:i', "29-4-2026 18:30") ));
// array_push($program, new Evning( 5, "Klubaften - Sommerafslutning" , DateTime::createFromFormat('d-m-Y H:i', "27-5-2026 20:00") ));

array_push(
    $program,
    new Evning(
        1,
        "Opstart - EDR informationsmøde - Vi mødes kl: 19:15 også starter informationsmødet kl: 19:30",
        DateTime::createFromFormat("d-m-Y H:i", "26-8-2026 19:15"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "30-9-2026 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "28-10-2026 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Juleafslutning - Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "25-11-2026 20:00"),
    ),
);

array_push(
    $program,
    new Evning(
        1,
        "Generalforsamling med dagsorden ifølge vedtægterne",
        DateTime::createFromFormat("d-m-Y H:i", "27-1-2027 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "24-2-2027 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "31-3-2027 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften",
        DateTime::createFromFormat("d-m-Y H:i", "28-4-2027 20:00"),
    ),
);
array_push(
    $program,
    new Evning(
        1,
        "Klubaften - Sommerafslutning",
        DateTime::createFromFormat("d-m-Y H:i", "26-5-2027 20:00"),
    ),
);

?>
