<?php

namespace App\Controller;

use Core\Controller;
use App\Helper\FormBuilder;
use App\Model\Film;
use App\Model\Room;
use App\Model\Age;
use App\Model\Hour;
use App\Block\FilmDisplay;


class FilmsController extends Controller
{
    public function index()
    {
        $currentDateTime = date('Y-m-d H:i:s');
        $films = Film::getFilms();
        $block = new FilmDisplay();
        $this->view->time = $currentDateTime;
        $this->view->render('films/index');
        echo $block->getFilmsBlock($films);
    }

    public function create()
    {
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

        $active = [1, 0];
        $form = new FormBuilder(url('films/store'), 'post', '');
        $form->addInput([
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
            'placeholder' => 'Film title'
        ], 'd-block mb-2 border-0 text-dark', 'Film title')
            ->addSelect($active, 'active', 'active', 'd-block', 'Is it currently showing?')
            ->addSelect($rooms, 'room', 'room', 'd-block', 'Which cinema room?')
            ->addSelect($ages, 'age', 'age', 'd-block', 'Age range')
            ->addSelect($hours, 'hour', 'hour', 'd-block', 'Hour-range')
            ->addSubmit([
                'id' => 'submit',
                'name' => 'submit',
                'type' => 'submit',
                'value' => 'Create'
            ],'btn btn-success mt-2');
//        print_r($rooms);
//        print_r($ages);
        $this->view->form = $form->get();
        $this->view->render('films/create');
    }

    public function store()
    {
        $newFilm = new Film();
        $newFilm->setTitle($_POST['title']);
        $newFilm->setActive($_POST['active']);
        $newFilm->setRoom($_POST['room']);
        $newFilm->setHour($_POST['hour']);
        $newFilm->setAge($_POST['age']);
        $newFilm->create();
        redirect('index');
    }
}