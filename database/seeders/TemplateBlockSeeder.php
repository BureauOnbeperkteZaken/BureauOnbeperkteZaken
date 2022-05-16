<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templateblocks')->insert([
            'template_id' => 1,
            'order' => 1,
            'content' => '<div class="paragraph"><h5>Onbeperkt anders</h5><h1>Project onbeperkt anders</h1><ul><li><strong>In onze eerste documentaireserie “Onbeperkt Anders” laten vijf mensen met een handicap zien waar hun dromen en potentie’s liggen. Wij gaan met hun meedenken tot het absurde toe. “Ik ga jou leren wie ik ben en wat ik kan betekenen voor de maatschappij.”</strong></li><li><strong>Bij al onze producten werken mensen met een beperking en professionals samen.</strong></li></ul></div>',
            'type' => 'paragraph',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 1,
            'order' => 2,
            'content' => '<div class="paragraph"><p>Ons eerste project “Onbeperkt Anders”, zal in een aantal korte heftige films laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe zij in onze samenleving een volwaardige plaats kunnen innemen. Een olievlek teweeg brengen binnen en buiten de eigen doelgroep.&nbsp;Zodat het VN Verdrag beter nageleefd gaat worden en mensen met een beperking beter zichtbaar worden en volwaardig mee kunnen doen. De mensen met een beperking gaan ons leren hoe dat moet.</p><p>De korte films laten zien hoe we samen met het talent om kunnen gaan. Kijk naar Bob, hij heeft het syndroom van Down en wilde graag in een ziekenhuis werken om andere mensen te kunnen helpen. Hij werkt nu op een voedingsafdeling van het ziekenhuis. Op deze afdeling werkt Bob met veel relativeringsvermogen en plezier en daarbij is het hele team op de afdeling met veel meer plezier gaan werken. Een ander voorbeeld is Kevin, hij werkt al jaren bij een theaterwerkplaats en kan ontzettend goed jongleren. Kevin jongleert met brandende fakkels in een openlucht theater.</p><p><br></p><p>We draaien het denken om; de hoofdrolspeler neemt de kijker mee met zijn talent en laat zien wat zijn ideaal is. Zo krijgt de kijker inzicht dat iedereen erbij hoort en eerlijke kansen krijgt.</p></div>',
            'type' => 'paragraph',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 1,
            'order' => 3,
            'content' => '<div class="paragraph"><h1>Het podium is opgesteld in 5 scripts</h1></div>',
            'type' => 'paragraph',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 1,
            'order' => 4,
            'content' => '<div class="paragraph paragraph-image paragraph-image-container"><div><h2>Dit is JoJo met Thijmen en Marleen</h2><p>Marleen wilt graag trouwen en samenwonen.</p><p><strong>Hoe overtuigt zij haar ouders?</strong></p></div><div class="photo"><img src="/storage/uploads/boz.jpg" alt="alt text"></div></div>',
            'type' => 'paragraph-image',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 2,
            'order' => 1,
            'content' => '<div class="paragraph"><h1>Project onbeperkt anders</h1><ul><li><strong>In onze eerste documentaireserie “Onbeperkt Anders” laten vijf mensen met een handicap zien waar hun dromen en potentie’s liggen. Wij gaan met hun meedenken tot het absurde toe. “Ik ga jou leren wie ik ben en wat ik kan betekenen voor de maatschappij.”</strong></li><li><strong>Bij al onze producten werken mensen met een beperking en professionals samen.</strong></li></ul><p><br></p><p>Ons eerste project “Onbeperkt Anders”, zal in een aantal korte heftige films laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe zij in onze samenleving een volwaardige plaats kunnen innemen. Een olievlek teweeg brengen binnen en buiten de eigen doelgroep.&nbsp;Zodat het VN Verdrag beter nageleefd gaat worden en mensen met een beperking beter zichtbaar worden en volwaardig mee kunnen doen. De mensen met een beperking gaan ons leren hoe dat moet.</p><p>De korte films laten zien hoe we samen met het talent om kunnen gaan. Kijk naar Bob, hij heeft het syndroom van Down en wilde graag in een ziekenhuis werken om andere mensen te kunnen helpen. Hij werkt nu op een voedingsafdeling van het ziekenhuis. Op deze afdeling werkt Bob met veel relativeringsvermogen en plezier en daarbij is het hele team op de afdeling met veel meer plezier gaan werken. Een ander voorbeeld is Kevin, hij werkt al jaren bij een theaterwerkplaats en kan ontzettend goed jongleren. Kevin jongleert met brandende fakkels in een openlucht theater.</p><p><br></p><p>We draaien het denken om; de hoofdrolspeler neemt de kijker mee met zijn talent en laat zien wat zijn ideaal is. Zo krijgt de kijker inzicht dat iedereen erbij hoort en eerlijke kansen krijgt.</p><p><br></p><h1>Het podium is opgesteld in 5 scripts</h1><p><br></p></div>',
            'type' => 'paragraph',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 2,
            'order' => 2,
            'content' => '<div class="paragraph paragraph-image paragraph-image-container"><div><h2>Dit is JoJo met Thijmen en Marleen</h2><p>Marleen wilt graag trouwen en samenwonen.</p><p><strong>Hoe overtuigt zij haar ouders?</strong></p></div><div class="photo"><img src="/storage/uploads/boz.jpg" alt="alt text"></div></div>',
            'type' => 'paragraph-image',
        ]);
        DB::table('templateblocks')->insert([
            'template_id' => 3,
            'order' => 1,
            'content' => '<div class="paragraph"><h1>Roel maak deze ff</h1></div>',
            'type' => 'paragraph',
        ]);
    }
}
