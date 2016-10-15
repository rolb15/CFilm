<?php

namespace rolb\STHLMFilm;

class CFilms
{
    private $apikey;
    private $date;



    /**
     * CFilms constructor.
     * @param $apikey
     * @param $date
     */
    public function __construct($apikey, $date)
    {
        $this->apikey = $apikey;
        $this->date = $date;
    }


    /**
     * Renders the html
     */
    public function program()
    {
        $data = $this->getProg();

        $html = '<div class="date"> Stockholms Filmfestival Programme ' . $this->date . '<br></div>';

        foreach($data as $value) {

            $filmid = $value["filmId"];

            $html .= '<br><div class="ftime">' . substr(htmlentities($value["eventTime"]), 0, -3) . '</div>';

            $html .= '<div class="fname"><a href="sthlmfilms?film=' . $filmid . '">' . htmlentities($value["eventName_en"]) . '</a></div>';

            $html .= '<div class="fvenue">Venue: ' . htmlentities($value["venueName"]) . '</div>';

            $html .= '<br>';

        }

        return $html;
    }

    public function filmInfo($filmid)
    {
        $filmdata = $this->getFilm($filmid);

        $html = '';
        $html .= '<br><div class="ftitle">' . htmlentities($filmdata["filmName"]) . '</div>';
        $html .= '<br><div class="fdir"> Director: ' . htmlentities($filmdata["filmDirector"]) . '</div>';
        $html .= '<br><div class="flength">' . htmlentities($filmdata["filmLength"]) . ' minutes </div>';
        $html .= '<br><div class="finfo">' . htmlentities($filmdata["filmDescription_en"]) . '</div>';
        $html .= '<br><div class="flink"> <iframe width="420" height="315"src="https://www.youtube.com/embed/' . htmlentities($filmdata["filmYoutubeId"]) . '"></iframe></div>';

        return $html;
    }

    private function getProg()
    {

        $result = file_get_contents("http://api.stockholmfilmfestival.se/v1/events/date_list/format/json/date/"
            . $this->date . "/API-Key/" . $this->apikey);

        return json_decode($result, true);
    }


    private function getFilm($filmid)
    {

        $result = file_get_contents("http://api.stockholmfilmfestival.se/v1/films/film/film_id/"
            . $filmid . "/API-Key/" . $this->apikey . "/format/json/");

        return json_decode($result, true);
    }

}