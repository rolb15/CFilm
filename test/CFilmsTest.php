<?php
namespace rolb\CFilm;

class CFilmsTest extends \PHPUnit_Framework_TestCase
{

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function testProgram()
    {
        $films = new CFilms('sRlA0RrXxvySIRnxkZonZM6YaSkR2WyhnXfmmN9Z', '15-11-20');

        $html = $films->program();

        $this->assertEquals($html, '<div class="date"> Stockholms Filmfestival Programme 15-11-20<br></div><br><div class="ftime">11:30</div><div class="fname"><a href="sthlmfilms?film=10041">Aferim!</a></div><div class="fvenue">Venue: Klarabiografen</div><br><br><div class="ftime">12:00</div><div class="fname"><a href="sthlmfilms?film=10112">In Pursuit of a Better Life</a></div><div class="fvenue">Venue: Skandia</div><br><br><div class="ftime">12:00</div><div class="fname"><a href="sthlmfilms?film=10070">James White</a></div><div class="fvenue">Venue: Grand 1</div><br><br><div class="ftime">13:00</div><div class="fname"><a href="sthlmfilms?film=10092">Makeup Room</a></div><div class="fvenue">Venue: Grand 4</div><br><br><div class="ftime">13:00</div><div class="fname"><a href="sthlmfilms?film=10139">The Black Panthers: Vanguard of the Revolution</a></div><div class="fvenue">Venue: Victoria 4</div><br><br><div class="ftime">13:30</div><div class="fname"><a href="sthlmfilms?film=10040">3000 Nights</a></div><div class="fvenue">Venue: Klarabiografen</div><br><br><div class="ftime">14:00</div><div class="fname"><a href="sthlmfilms?film=9986">As I open my eyes</a></div><div class="fvenue">Venue: Victoria 2</div><br><br><div class="ftime">14:00</div><div class="fname"><a href="sthlmfilms?film=10009">Mekko</a></div><div class="fvenue">Venue: Skandia</div><br><br><div class="ftime">14:30</div><div class="fname"><a href="sthlmfilms?film=10004">Tikkun</a></div><div class="fvenue">Venue: Grand 1</div><br><br><div class="ftime">15:30</div><div class="fname"><a href="sthlmfilms?film=10055">Much Loved</a></div><div class="fvenue">Venue: Klarabiografen</div><br><br><div class="ftime">15:30</div><div class="fname"><a href="sthlmfilms?film=10010">Parched</a></div><div class="fvenue">Venue: Victoria 4</div><br><br><div class="ftime">15:30</div><div class="fname"><a href="sthlmfilms?film=10131">Violator</a></div><div class="fvenue">Venue: Grand 4</div><br><br><div class="ftime">16:30</div><div class="fname"><a href="sthlmfilms?film=10123">The Devil&rsquo;s Candy</a></div><div class="fvenue">Venue: Victoria 2</div><br><br><div class="ftime">17:00</div><div class="fname"><a href="sthlmfilms?film=9998">Nahid</a></div><div class="fvenue">Venue: Grand 1</div><br><br><div class="ftime">17:30</div><div class="fname"><a href="sthlmfilms?film=10045">Gold Coast</a></div><div class="fvenue">Venue: Bio Mauritz</div><br><br><div class="ftime">17:30</div><div class="fname"><a href="sthlmfilms?film=10118">Walls</a></div><div class="fvenue">Venue: Klarabiografen</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10042">Carol</a></div><div class="fvenue">Venue: Skandia</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10065">Dope</a></div><div class="fvenue">Venue: Park</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10089">Kaili Blues</a></div><div class="fvenue">Venue: Grand 4</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10000">Price of Love</a></div><div class="fvenue">Venue: Reflexen</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10090">The Kids</a></div><div class="fvenue">Venue: Victoria 4</div><br><br><div class="ftime">18:00</div><div class="fname"><a href="sthlmfilms?film=10054">The Measure of a Man</a></div><div class="fvenue">Venue: Zita 1</div><br><br><div class="ftime">18:30</div><div class="fname"><a href="sthlmfilms?film=10101">I Promise You Anarchy</a></div><div class="fvenue">Venue: Zita 2</div><br><br><div class="ftime">19:00</div><div class="fname"><a href="sthlmfilms?film=9995">Louder Than Bombs</a></div><div class="fvenue">Venue: Victoria 2</div><br><br><div class="ftime">19:00</div><div class="fname"><a href="sthlmfilms?film=10036">The Program</a></div><div class="fvenue">Venue: Grand 1</div><br><br><div class="ftime">19:30</div><div class="fname"><a href="sthlmfilms?film=10067">Experimenter</a></div><div class="fvenue">Venue: Klarabiografen</div><br><br><div class="ftime">20:00</div><div class="fname"><a href="sthlmfilms?film=10112">In Pursuit of a Better Life</a></div><div class="fvenue">Venue: Reflexen</div><br><br><div class="ftime">20:00</div><div class="fname"><a href="sthlmfilms?film=10086">The Black Hen</a></div><div class="fvenue">Venue: Victoria 4</div><br><br><div class="ftime">20:15</div><div class="fname"><a href="sthlmfilms?film=9994">Lazy Hazy Crazy</a></div><div class="fvenue">Venue: Filmhuset Victor</div><br><br><div class="ftime">20:30</div><div class="fname"><a href="sthlmfilms?film=10082">Alice in Earnestland</a></div><div class="fvenue">Venue: Grand 4</div><br><br><div class="ftime">20:30</div><div class="fname"><a href="sthlmfilms?film=9996">Maryland</a></div><div class="fvenue">Venue: Skandia</div><br><br><div class="ftime">20:30</div><div class="fname"><a href="sthlmfilms?film=10146">My Nazi Legacy: What Our Fathers Did</a></div><div class="fvenue">Venue: Zita 2</div><br><br><div class="ftime">21:00</div><div class="fname"><a href="sthlmfilms?film=10120">Baskin</a></div><div class="fvenue">Venue: Grand 1</div><br><br><div class="ftime">21:00</div><div class="fname"><a href="sthlmfilms?film=10140">Bolshoi Babylon</a></div><div class="fvenue">Venue: Victoria 2</div><br><br><div class="ftime">21:00</div><div class="fname"><a href="sthlmfilms?film=10124">Green Room</a></div><div class="fvenue">Venue: Park</div><br><br><div class="ftime">21:00</div><div class="fname"><a href="sthlmfilms?film=9999">Neon Bull</a></div><div class="fvenue">Venue: Zita 1</div><br><br><div class="ftime">22:00</div><div class="fname"><a href="sthlmfilms?film=10128">Island City</a></div><div class="fvenue">Venue: Victoria 4</div><br><br><div class="ftime">22:30</div><div class="fname"><a href="sthlmfilms?film=10133">What We Become</a></div><div class="fvenue">Venue: Skandia</div><br>', "Mismatch!");
    }

    public function testFilmInfo()
    {
        $films = new CFilms('sRlA0RrXxvySIRnxkZonZM6YaSkR2WyhnXfmmN9Z', '15-11-20');

        $html = $films->filmInfo(10041);

        $this->assertEquals($html, '<br><div class="ftitle">Aferim!</div><br><div class="fdir"> Director: Radu Jude</div><br><div class="flength">108 minutes </div><br><div class="finfo">In this beautiful black and white drama we follow a policeman and his son in their search for an escaped slave in Romania in the early 19th century. The frame for this captivating and political story of an under-represented group is the western genre, but at the core of Radu Jude&rsquo;s &raquo;Aferim!&laquo; is the importance of understanding the past.</div><br><div class="flink"> <iframe width="420" height="315"src="https://www.youtube.com/embed/ONKjGxM3lzE"></iframe></div>', "Mismatch!");
    }

    public function testgetProg()
    {
        $films = new CFilms('sRlA0RrXxvySIRnxkZonZM6YaSkR2WyhnXfmmN9Z', '15-11-20');

        $json = $this->invokeMethod($films, 'getProg', array(''));

        $this->assertEquals($json[0]["eventTime"], '11:30:00', "Mismatch!");
    }

    public function testgetFilm()
    {
        $films = new CFilms('sRlA0RrXxvySIRnxkZonZM6YaSkR2WyhnXfmmN9Z', '15-11-20');

        $json = $this->invokeMethod($films, 'getFilm', array('10041'));

        $this->assertEquals($json["filmName"], 'Aferim!', "Mismatch!");
    }
}