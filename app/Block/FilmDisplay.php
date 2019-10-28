<?php

namespace App\Block;

use App\Model\Hour;
use App\Model\Room;
use App\Model\Age;
use DateTime;

class FilmDisplay
{
    public function getFilmsBlock($films)
    {
        $html = '';
        $html .= '<div class="container">';
        $html .= '<table id="tableMain" role="table" class="table table-dark">';
        $html .= '<thead>';
        $html .= '<tr role="row">';
        $html .= '<th role="columnheader">Title</th>';
        $html .= '<th role="columnheader">Room</th>';
        $html .= '<th role="columnheader">Hour</th>';
        $html .= '<th role="columnheader">Time until starts</th>';
        $html .= '<th role="columnheader">Age-range</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody role="rowgroup">';

        //Here foreach of the films
        foreach ($films as $film) {
//            dd($film);
            $html .= $this->getFilmBlock($film);
        }
        $html .= '</table>';
        $html .= '</div>';
        return $html;
    }

    public function getFilmBlock($film)
    {
        //Parsing the film room and ages with Models
        $roomObj = Room::getRooms();
        $rooms = [0 => 'Rooms'];
        foreach ($roomObj as $room) {
            $rooms[$room->id] = $room->name;
        }
        $agesObj = Age::getAges();
        $ages = [0 => 'Age-range'];
        foreach ($agesObj as $age){
            $ages[$age->id] = $age->range;
        }
        $hoursObj = Hour::getHours();
        $hours = [0 => 'Hours'];
        foreach ($hoursObj as $hour){
            $hours[$hour->id] = $hour->range;
        }

        $html = '';
        if ($film->active != 1){
            $html .= '<tr role="row" class="tableColor bg-secondary">';
        }else{
            $html .= '<tr role="row" class="tableColor">';
        }
        $html .= '<td role="cell">' . ucfirst($film->title) . '</td>';
        $html .= '<td role="cell">' . ucfirst($rooms[$film->room]) . '</td>';

        $date_expire = $hours[$film->hour];
        $date = new DateTime($date_expire); // 15:00
        $now = new DateTime(); //21:00
//        dd($now);
//        dd($date);

        $time_left = $now->diff($date)->format("%h hours and %i minuts");

        $html .= '<td role="cell">' . $hours[$film->hour] . '</td>';
        $html .= '<td role="cell">' . $time_left . '</td>';
        $html .= '<td role="cell">' . ucfirst($ages[$film->age]) . '</td>';
        return $html;
    }
}