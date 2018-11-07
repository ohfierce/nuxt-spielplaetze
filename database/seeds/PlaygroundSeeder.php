<?php

use Illuminate\Database\Seeder;

class PlaygroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playgrounds')->insert([
            'name' => 'Bergstraße/Ackerstraße',
            'addressStreet' => 'Bergstraße 12',
            'addressZip' => '10115',
            'addressLatitude' => '52.529889',
            'addressLongitude' => '13.394389',
            'wasserspielplatz' => 0,
            'fussball' => 0,
            'basketball' => 0,
            'tischtennis' => 1,
            'rutsche' => 0,
            'klettern' => 1,
            'spielsand' => 1,
            'seilbahn' => 0,
            'size' => 3
        ]);


     DB::table('playgrounds')->insert([
           'name' => 'Borsigpark I',
           'addressStreet' => 'Invalidenstraße 130-131',
           'addressZip' => '10115',
           'addressLatitude' => '52.531444',
           'addressLongitude' => '13.389583',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Die Drachenburg',
           'addressStreet' => 'Bergstr. 14',
           'addressZip' => '10115',
           'addressLatitude' => '52.530444',
           'addressLongitude' => '13.395583',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Invalidenpark',
           'addressStreet' => 'Habersaathstraße 4A',
           'addressZip' => '10115',
           'addressLatitude' => '52.530250',
           'addressLongitude' => '13.375361',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Pappelplatz',
           'addressStreet' => 'Pappelplatz',
           'addressZip' => '10115',
           'addressLatitude' => '52.532583',
           'addressLongitude' => '13.394583',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Park am Nordbahnhof I',
           'addressStreet' => 'Caroline-Michaelis-Str. 17',
           'addressZip' => '10115',
           'addressLatitude' => '52.535667',
           'addressLongitude' => '13.383222',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Plansche im Borsigpark',
           'addressStreet' => 'Eichendorffstraße 9',
           'addressZip' => '10115',
           'addressLatitude' => '52.531167',
           'addressLongitude' => '13.387667',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Strelitzer Str 10',
           'addressStreet' => 'Strelitzer Str 10',
           'addressZip' => '10115',
           'addressLatitude' => '52.535250',
           'addressLongitude' => '13.396167',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Strelitzer Str 71',
           'addressStreet' => 'Strelitzer Str 71',
           'addressZip' => '10115',
           'addressLatitude' => '52.534250',
           'addressLongitude' => '13.396778',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Auguststr. 84',
           'addressStreet' => 'Auguststr. 84',
           'addressZip' => '10117',
           'addressLatitude' => '52.525972',
           'addressLongitude' => '13.391861',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Charlottenstr/Krausenstr.',
           'addressStreet' => 'Charlottenstraße 23',
           'addressZip' => '10117',
           'addressLatitude' => '52.509833',
           'addressLongitude' => '13.392361',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Krausenstr./Jerusalemerstr.',
           'addressStreet' => 'Krausenstr. 35',
           'addressZip' => '10117',
           'addressLatitude' => '52.510111',
           'addressLongitude' => '13.396944',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Kurstrassenpark',
           'addressStreet' => 'Niederwallstr. 13',
           'addressZip' => '10117',
           'addressLatitude' => '52.512278',
           'addressLongitude' => '13.399917',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Marion-Gräfin-Dönhoff-Platz',
           'addressStreet' => 'Leipziger Straße 49',
           'addressZip' => '10117',
           'addressLatitude' => '52.510333',
           'addressLongitude' => '13.399528',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Auguststr.23',
           'addressStreet' => 'Auguststr.23',
           'addressZip' => '10119',
           'addressLatitude' => '52.527111',
           'addressLongitude' => '13.396417',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Joachimstr./Auguststr.',
           'addressStreet' => 'Joachimstr./Auguststr.',
           'addressZip' => '10119',
           'addressLatitude' => '52.527555',
           'addressLongitude' => '13.400563',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Koppenplatz',
           'addressStreet' => 'Koppenplatz',
           'addressZip' => '10119',
           'addressLatitude' => '52.528000',
           'addressLongitude' => '13.398028',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rosenthaler Str. / Steinstr',
           'addressStreet' => 'Rosenthaler Str./Steinstr',
           'addressZip' => '10119',
           'addressLatitude' => '52.526917',
           'addressLongitude' => '13.403944',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Schendelpark',
           'addressStreet' => 'Schendelgasse 1',
           'addressZip' => '10119',
           'addressLatitude' => '52.527417',
           'addressLongitude' => '13.408722',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark am Weinberg',
           'addressStreet' => 'Veteranenstr. 14',
           'addressZip' => '10119',
           'addressLatitude' => '52.532944',
           'addressLongitude' => '13.403167',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Wunsch-Garten',
           'addressStreet' => 'Mulackstr.10',
           'addressZip' => '10119',
           'addressLatitude' => '52.527500',
           'addressLongitude' => '13.405861',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Teutoburger Platz',
           'addressStreet' => 'Teutoburger Platz',
           'addressZip' => '10119',
           'addressLatitude' => '52.532056',
           'addressLongitude' => '13.409222',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Monbijoupark I',
           'addressStreet' => 'Oranienburger Str.77',
           'addressZip' => '10178',
           'addressLatitude' => '52.524110',
           'addressLongitude' => '13.395340',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Monbijoupark II',
           'addressStreet' => 'Monbijoustraße 3B',
           'addressZip' => '10117',
           'addressLatitude' => '52.522960',
           'addressLongitude' => '13.394990',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rosa-Luxemburg-Platz',
           'addressStreet' => 'Weydingerstr.9',
           'addressZip' => '10178',
           'addressLatitude' => '52.526833',
           'addressLongitude' => '13.412694',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Zolastrasse/Linienstrasse',
           'addressStreet' => 'Zolastrasse 1',
           'addressZip' => '10178',
           'addressLatitude' => '52.527972',
           'addressLongitude' => '13.411889',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Sebastianstr.33',
           'addressStreet' => 'Sebastianstr.33',
           'addressZip' => '10179',
           'addressLatitude' => '52.507944',
           'addressLongitude' => '13.408806',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Am Köllnischen Park',
           'addressStreet' => 'Am Köllnischen Park 2',
           'addressZip' => '10179',
           'addressLatitude' => '52.512750',
           'addressLongitude' => '13.415083',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fischerinsel 1',
           'addressStreet' => 'Fischerinsel 1',
           'addressZip' => '10179',
           'addressLatitude' => '52.514361',
           'addressLongitude' => '13.407028',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fischerinsel 2',
           'addressStreet' => 'Fischerinsel 3',
           'addressZip' => '10179',
           'addressLatitude' => '52.513333',
           'addressLongitude' => '13.408417',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fischerinsel 3',
           'addressStreet' => 'Fischerinsel 6',
           'addressZip' => '10179',
           'addressLatitude' => '52.512278',
           'addressLongitude' => '13.407194',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fischerinsel 4',
           'addressStreet' => 'Fischerinsel 10',
           'addressZip' => '10179',
           'addressLatitude' => '52.511778',
           'addressLongitude' => '13.404611',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Magazinstr. 1',
           'addressStreet' => 'Magazinstr. 1',
           'addressZip' => '10179',
           'addressLatitude' => '52.519389',
           'addressLongitude' => '13.420778',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Neue Jakobstr 12',
           'addressStreet' => 'Neue Jakobstr 12',
           'addressZip' => '10179',
           'addressLatitude' => '52.510067',
           'addressLongitude' => '13.413558',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Neue Jakobstr 30',
           'addressStreet' => 'Neue Jakobstr 30',
           'addressZip' => '10179',
           'addressLatitude' => '52.510306',
           'addressLongitude' => '13.414500',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Andreasstraße 24',
           'addressStreet' => 'Andreasstraße 24',
           'addressZip' => '10243',
           'addressLatitude' => '52.513028',
           'addressLongitude' => '13.432361',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Gubener Str. 1',
           'addressStreet' => 'Gubener Str. 1',
           'addressZip' => '10243',
           'addressLatitude' => '52.515528',
           'addressLongitude' => '13.443639',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Hildegard-Jadamowitz-Str.',
           'addressStreet' => 'Hildegard-Jadamowitz-Str. 19',
           'addressZip' => '10243',
           'addressLatitude' => '52.515194',
           'addressLongitude' => '13.450417',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Kleine Markusstrasse',
           'addressStreet' => 'Kleine Markusstrasse 25',
           'addressZip' => '10243',
           'addressLatitude' => '52.514556',
           'addressLongitude' => '13.426083',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Krautstraße 1',
           'addressStreet' => 'Krautstr.24',
           'addressZip' => '10243',
           'addressLatitude' => '52.513722',
           'addressLongitude' => '13.428222',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Krautstraße 2',
           'addressStreet' => 'Krautstr.24',
           'addressZip' => '10243',
           'addressLatitude' => '52.513917',
           'addressLongitude' => '13.427556',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Krautstrasse/Singerstrasse',
           'addressStreet' => 'Singerstr.22',
           'addressZip' => '10243',
           'addressLatitude' => '52.515278',
           'addressLongitude' => '13.429278',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Marchlewskistr.39',
           'addressStreet' => 'Marchlewskistr.39',
           'addressZip' => '10243',
           'addressLatitude' => '52.513361',
           'addressLongitude' => '13.443250',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Mehlbeerenweg I',
           'addressStreet' => 'Mehlbeerenweg',
           'addressZip' => '10243',
           'addressLatitude' => '52.513083',
           'addressLongitude' => '13.427111',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Mehlbeerenweg II',
           'addressStreet' => 'Mehlbeerenweg',
           'addressZip' => '10243',
           'addressLatitude' => '52.513417',
           'addressLongitude' => '13.426306',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Müncheberger Str',
           'addressStreet' => 'Müncheberger Str',
           'addressZip' => '10243',
           'addressLatitude' => '52.513111',
           'addressLongitude' => '13.435528',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Straße der Pariser Kommune 22',
           'addressStreet' => 'Straße der Pariser Kommune 22',
           'addressZip' => '10243',
           'addressLatitude' => '52.514944',
           'addressLongitude' => '13.441167',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Straße der Pariser Kommune 32',
           'addressStreet' => 'Straße der Pariser Kommune 32',
           'addressZip' => '10243',
           'addressLatitude' => '52.514944',
           'addressLongitude' => '13.441167',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Straußberger Platz',
           'addressStreet' => 'Straußberger Platz 13',
           'addressZip' => '10243',
           'addressLatitude' => '52.517389',
           'addressLongitude' => '13.428806',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Blumenstr. 48',
           'addressStreet' => 'Blumenstr. 48',
           'addressZip' => '10243',
           'addressLatitude' => '52.517139',
           'addressLongitude' => '13.431639',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Alt-Stralau 13',
           'addressStreet' => 'Alt-Stralau 13',
           'addressZip' => '10245',
           'addressLatitude' => '52.494361',
           'addressLongitude' => '13.468806',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Bödikerstr',
           'addressStreet' => 'Bödikerstr. 26',
           'addressZip' => '10245',
           'addressLatitude' => '52.501944',
           'addressLongitude' => '13.463778',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Boxhagener Platz',
           'addressStreet' => 'Krossener Str. 11',
           'addressZip' => '10245',
           'addressLatitude' => '52.510722',
           'addressLongitude' => '13.459250',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fischzug 12',
           'addressStreet' => 'Fischzug 12',
           'addressZip' => '10245',
           'addressLatitude' => '52.496694',
           'addressLongitude' => '13.471972',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Knorrpromenade 5',
           'addressStreet' => 'Knorrpromenade 5',
           'addressZip' => '10245',
           'addressLatitude' => '52.509611',
           'addressLongitude' => '13.462722',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Ostkreuz',
           'addressStreet' => 'Matkowskystraße 4',
           'addressZip' => '10245',
           'addressLatitude' => '52.504889',
           'addressLongitude' => '13.464667',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Palmkernzeile',
           'addressStreet' => 'Palmkernzeile 11',
           'addressZip' => '10245',
           'addressLatitude' => '52.495583',
           'addressLongitude' => '13.475028',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rudolfplatz',
           'addressStreet' => 'Am Rudolfplatz 1',
           'addressZip' => '10245',
           'addressLatitude' => '52.503250',
           'addressLongitude' => '13.455278',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Simplonstr. 2',
           'addressStreet' => 'Simplonstr. 2',
           'addressZip' => '10245',
           'addressLatitude' => '52.509500',
           'addressLongitude' => '13.456500',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Wühlischplatz',
           'addressStreet' => 'Wühlischplatz',
           'addressZip' => '10245',
           'addressLatitude' => '52.507722',
           'addressLongitude' => '13.465028',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Wühlischstr. I',
           'addressStreet' => 'Wühlischstr. 55',
           'addressZip' => '10245',
           'addressLatitude' => '52.507611',
           'addressLongitude' => '13.466778',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Wühlischstr. II',
           'addressStreet' => 'Wühlischstr. 55',
           'addressZip' => '10245',
           'addressLatitude' => '52.507167',
           'addressLongitude' => '13.466944',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Dossestrasse',
           'addressStreet' => 'Dossestr. 5',
           'addressZip' => '10247',
           'addressLatitude' => '52.511453',
           'addressLongitude' => '13.474110',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Drachenspielplatz',
           'addressStreet' => 'Schreinerstr. 17',
           'addressZip' => '10247',
           'addressLatitude' => '52.517333',
           'addressLongitude' => '13.466889',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Eldenaerstr. / Samariterstr.',
           'addressStreet' => 'Eldenaerstr 22',
           'addressZip' => '10247',
           'addressLatitude' => '52.519944',
           'addressLongitude' => '13.467222',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Forckenbeckplatz',
           'addressStreet' => 'Proskauer Str. 20',
           'addressZip' => '10247',
           'addressLatitude' => '52.519417',
           'addressLongitude' => '13.461889',
           'wasserspielplatz' => 1,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Frankfurter Tor',
           'addressStreet' => 'Frankfurter Allee 2',
           'addressZip' => '10247',
           'addressLatitude' => '52.514944',
           'addressLongitude' => '13.455028',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Jessnerstr.I',
           'addressStreet' => 'Jessnerstr.11',
           'addressZip' => '10247',
           'addressLatitude' => '52.512500',
           'addressLongitude' => '13.473444',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 1,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Kreutzigerstr. 5',
           'addressStreet' => 'Kreutzigerstr. 5',
           'addressZip' => '10247',
           'addressLatitude' => '52.514574',
           'addressLongitude' => '13.460667',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Oderstr./Jungstr',
           'addressStreet' => 'Oderstr. 14',
           'addressZip' => '10247',
           'addressLatitude' => '52.511528',
           'addressLongitude' => '13.466278',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Planetenspielplatz',
           'addressStreet' => 'Dossestr. 19',
           'addressZip' => '10247',
           'addressLatitude' => '52.510722',
           'addressLongitude' => '13.473611',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Schleidenplatz',
           'addressStreet' => 'Schleidenplatz',
           'addressZip' => '10247',
           'addressLatitude' => '52.515250',
           'addressLongitude' => '13.472611',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Schreinerstr. 19',
           'addressStreet' => 'Schreinerstr. 19',
           'addressZip' => '10247',
           'addressLatitude' => '52.517139',
           'addressLongitude' => '13.467833',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Traveplatz',
           'addressStreet' => 'Jessnerstr. 36',
           'addressZip' => '10247',
           'addressLatitude' => '52.510583',
           'addressLongitude' => '13.470750',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Voigtstr. 29',
           'addressStreet' => 'Voigtstr. 29',
           'addressZip' => '10247',
           'addressLatitude' => '52.519000',
           'addressLongitude' => '13.469556',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Blankensteinpark',
           'addressStreet' => 'Richard-Ermisch-Str. 4',
           'addressZip' => '10247',
           'addressLatitude' => '52.521556',
           'addressLongitude' => '13.459861',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Petersburger Platz',
           'addressStreet' => 'Straßmannstr. 19',
           'addressZip' => '10249',
           'addressLatitude' => '52.521500',
           'addressLongitude' => '13.450278',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark Friedrichshain 1',
           'addressStreet' => 'Friedenstr. 12',
           'addressZip' => '10249',
           'addressLatitude' => '52.526444',
           'addressLongitude' => '13.428833',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Dornröschenschloss',
           'addressStreet' => 'Rosenfelder Ring 62',
           'addressZip' => '10315',
           'addressLatitude' => '52.511887',
           'addressLongitude' => '13.514535',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rosenfelder Ring I',
           'addressStreet' => 'Rosenfelder Ring 50',
           'addressZip' => '10315',
           'addressLatitude' => '52.510861',
           'addressLongitude' => '13.516139',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rosenfelder Ring II',
           'addressStreet' => 'Rosenfelder Ring 54',
           'addressZip' => '10315',
           'addressLatitude' => '52.510801',
           'addressLongitude' => '13.517179',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Der Teich',
           'addressStreet' => 'Hauffstr.21',
           'addressZip' => '10317',
           'addressLatitude' => '52.504361',
           'addressLongitude' => '13.482000',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Kernhofer Str. 9',
           'addressStreet' => 'Kernhofer Str. 9',
           'addressZip' => '10317',
           'addressLatitude' => '52.504056',
           'addressLongitude' => '13.477194',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Türrschmidtpark',
           'addressStreet' => 'Türrschmidtstr.2',
           'addressZip' => '10317',
           'addressLatitude' => '52.503083',
           'addressLongitude' => '13.476361',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rheinsteinpark',
           'addressStreet' => 'Rheingoldstraße 11A',
           'addressZip' => '10318',
           'addressLatitude' => '52.483500',
           'addressLongitude' => '13.531111',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Hönower Weg',
           'addressStreet' => 'Hönower Weg 50',
           'addressZip' => '10319',
           'addressLatitude' => '52.491583',
           'addressLongitude' => '13.509722',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Sewanstraße 353',
           'addressStreet' => 'Sewanstraße 353',
           'addressZip' => '10319',
           'addressLatitude' => '52.494944',
           'addressLongitude' => '13.521778',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Wasserwelten',
           'addressStreet' => 'Mellenseestraße 14',
           'addressZip' => '10319',
           'addressLatitude' => '52.494028',
           'addressLongitude' => '13.510750',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Albert-Hößler-Straße 2',
           'addressStreet' => 'Albert-Hößler-Straße 2',
           'addressZip' => '10365',
           'addressLatitude' => '52.510525',
           'addressLongitude' => '13.486805',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Freiaplatz',
           'addressStreet' => 'Freiaplatz',
           'addressZip' => '10365',
           'addressLatitude' => '52.516139',
           'addressLongitude' => '13.497278',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Hagenstraße',
           'addressStreet' => 'Hagenstraße 26',
           'addressZip' => '10365',
           'addressLatitude' => '52.517333',
           'addressLongitude' => '13.500861',
           'wasserspielplatz' => 1,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 1,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Bernhard-Bästlein-Str. 54',
           'addressStreet' => 'Bernhard-Bästlein-Str. 54',
           'addressZip' => '10367',
           'addressLatitude' => '52.531581',
           'addressLongitude' => '13.480599',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Bernhard-Bästlein-Straße 56',
           'addressStreet' => 'Bernhard-Bästlein-Straße 56',
           'addressZip' => '10367',
           'addressLatitude' => '52.531056',
           'addressLongitude' => '13.482722',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Herbert-Tschäpe-Straße 1',
           'addressStreet' => 'Herbert-Tschäpe-Straße 1',
           'addressZip' => '10369',
           'addressLatitude' => '52.532222',
           'addressLongitude' => '13.464472',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Otto-Marquardt-Str 3',
           'addressStreet' => 'Otto-Marquardt-Str 3',
           'addressZip' => '10369',
           'addressLatitude' => '52.533639',
           'addressLongitude' => '13.469306',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark Prenzlauer Berg',
           'addressStreet' => 'Hohenschönhauser Str. 76',
           'addressZip' => '10369',
           'addressLatitude' => '52.536306',
           'addressLongitude' => '13.465972',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Straßburger Straße 14',
           'addressStreet' => 'Straßburger Straße 14',
           'addressZip' => '10405',
           'addressLatitude' => '52.530417',
           'addressLongitude' => '13.414806',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Am Wasserturm',
           'addressStreet' => 'Kolmarer Str. 1',
           'addressZip' => '10405',
           'addressLatitude' => '52.533750',
           'addressLongitude' => '13.418667',
           'wasserspielplatz' => 1,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Christburger Str. 33',
           'addressStreet' => 'Christburger Str. 33',
           'addressZip' => '10405',
           'addressLatitude' => '52.535639',
           'addressLongitude' => '13.428056',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Danzigerstr. / Greifswalderstr',
           'addressStreet' => 'Danzigerstr 106',
           'addressZip' => '10405',
           'addressLatitude' => '52.537000',
           'addressLongitude' => '13.432500',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Diesterwegstraße',
           'addressStreet' => 'Diesterwegstraße',
           'addressZip' => '10405',
           'addressLatitude' => '52.539917',
           'addressLongitude' => '13.427333',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Ella-Kay-Str. 52',
           'addressStreet' => 'Ella-Kay-Str. 52',
           'addressZip' => '10405',
           'addressLatitude' => '52.538694',
           'addressLongitude' => '13.428611',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Ella-Kay-Straße 14',
           'addressStreet' => 'Ella-Kay-Straße 14',
           'addressZip' => '10405',
           'addressLatitude' => '52.538806',
           'addressLongitude' => '13.430833',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Ella-Kay-Straße 38',
           'addressStreet' => 'Ella-Kay-Straße 38',
           'addressZip' => '10405',
           'addressLatitude' => '52.540611',
           'addressLongitude' => '13.432250',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Fröbelplatz',
           'addressStreet' => 'Diesterwegstr. 10',
           'addressZip' => '10405',
           'addressLatitude' => '52.536139',
           'addressLongitude' => '13.429056',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Jablonskistr 34',
           'addressStreet' => 'Jablonskistr 34',
           'addressZip' => '10405',
           'addressLatitude' => '52.535639',
           'addressLongitude' => '13.429139',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Lilli-Henoch-Strasse',
           'addressStreet' => 'Lilli-Henoch-Strasse 11',
           'addressZip' => '10405',
           'addressLatitude' => '52.539722',
           'addressLongitude' => '13.434667',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Marienburger Str. 7',
           'addressStreet' => 'Marienburger Str. 7',
           'addressZip' => '10405',
           'addressLatitude' => '52.535417',
           'addressLongitude' => '13.424611',
           'wasserspielplatz' => 1,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Metzer Str. 15',
           'addressStreet' => 'Metzer Str. 15',
           'addressZip' => '10405',
           'addressLatitude' => '52.531833',
           'addressLongitude' => '13.417306',
           'wasserspielplatz' => 1,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Rykestr 25',
           'addressStreet' => 'Rykestr 25',
           'addressZip' => '10405',
           'addressLatitude' => '52.538639',
           'addressLongitude' => '13.421722',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Skatepark Prenzlauer Berg',
           'addressStreet' => 'Prenzlauer Berg 5',
           'addressZip' => '10405',
           'addressLatitude' => '52.528889',
           'addressLongitude' => '13.419611',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Sredzkistr 60',
           'addressStreet' => 'Sredzkistr 60',
           'addressZip' => '10405',
           'addressLatitude' => '52.537833',
           'addressLongitude' => '13.422083',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 1
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark Friedrichshain 2',
           'addressStreet' => 'Am Friedrichshain 1',
           'addressZip' => '10407',
           'addressLatitude' => '52.529000',
           'addressLongitude' => '13.435417',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark Friedrichshain 3',
           'addressStreet' => 'Am Friedrichshain 15',
           'addressZip' => '10407',
           'addressLatitude' => '52.528667',
           'addressLongitude' => '13.432028',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Volkspark Friedrichshain 4',
           'addressStreet' => 'Am Friedrichshain 16',
           'addressZip' => '10407',
           'addressLatitude' => '52.527694',
           'addressLongitude' => '13.431056',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 0,
           'seilbahn' => 1,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Arnswalder-Platz',
           'addressStreet' => 'Arnswalder-Platz',
           'addressZip' => '10407',
           'addressLatitude' => '52.532694',
           'addressLongitude' => '13.436694',
           'wasserspielplatz' => 1,
           'fussball' => 1,
           'basketball' => 1,
           'tischtennis' => 1,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Bernhard-Lichtenberg-Str. 1',
           'addressStreet' => 'Bernhard-Lichtenberg-Str. 1',
           'addressZip' => '10407',
           'addressLatitude' => '52.535306',
           'addressLongitude' => '13.436667',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Bötzowstr. / Bernhard-Lichtenbergstr',
           'addressStreet' => 'Bernhard-Lichtenberg-Str. 11',
           'addressZip' => '10407',
           'addressLatitude' => '52.535167',
           'addressLongitude' => '13.438167',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Conrad-Blenkle-Str. 5A',
           'addressStreet' => 'Conrad-Blenkle-Str. 5A',
           'addressZip' => '10407',
           'addressLatitude' => '52.528639',
           'addressLongitude' => '13.450389',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 3
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Dietrich-Bonhoeffer-Str. 10',
           'addressStreet' => 'Dietrich-Bonhoeffer-Str. 10',
           'addressZip' => '10407',
           'addressLatitude' => '52.534639',
           'addressLongitude' => '13.434500',
           'wasserspielplatz' => 0,
           'fussball' => 1,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 0,
           'klettern' => 1,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Hans-Otto-Str. 24',
           'addressStreet' => 'Hans-Otto-Str. 24',
           'addressZip' => '10407',
           'addressLatitude' => '52.531444',
           'addressLongitude' => '13.435944',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 0,
           'rutsche' => 1,
           'klettern' => 0,
           'spielsand' => 1,
           'seilbahn' => 0,
           'size' => 2
       ]);


     DB::table('playgrounds')->insert([
           'name' => 'Kniprodestraßenbrücke',
           'addressStreet' => 'Kniprodestraße 42',
           'addressZip' => '10407',
           'addressLatitude' => '52.536194',
           'addressLongitude' => '13.448750',
           'wasserspielplatz' => 0,
           'fussball' => 0,
           'basketball' => 0,
           'tischtennis' => 1,
           'rutsche' => 0,
           'klettern' => 0,
           'spielsand' => 0,
           'seilbahn' => 0,
           'size' => 2
       ]);
    }
}
