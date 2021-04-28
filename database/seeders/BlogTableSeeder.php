<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title'=>'Vietnamese Food Guide | Top Hawker Restaurants – Hanoi to Ho Chi Minh',
                'image'=>'blog-1.jpg',
                'category'=>'Traveling',
                'content'=>'Vietnamese food rates right up there with some of the best in the world. To have a full foodie experience, though, you need to visit each region. While most areas serve cuisine known by the same name throughout the country, each province has its own unique flavors and preparation style. So, don’t assume that once you’ve been to one city in Vietnam, that you’ve seen – and tasted – it all! Discover the differences, and make a list, because if you’re traveling to this gastronomic paradise, you’ve got A LOT of eating to do!
<div class="col">
    <h4><strong>Vietnamese Food Guide</strong> – NORTH | Hanoi</h4>
    <p>Simplicity and balance are the key to the tasty dishes served in the northernmost parts of Vietnam. Expect loads of vegetables and seafood dishes, all kicked up only slightly a notch with black pepper instead of chilies. You’ll find fish sauce in many Vietnamese recipes, but in the north, soy sauce, prawn sauce or lime are more prevalent in creating those tangy notes. And because temperatures are cooler in the north, many spices – like the chili pepper – don’t grow well, so traditional cooks adapted, and local cooks carry on the tradition with popular dishes you just gotta try!</p>
    <h4><strong>1. Bún riêu</strong></h4>
    <blockquote><p>
        Bún riêu is a traditional noodle soup with a rich tomato broth. The sour flavor combination is popular in summer and is generally embellished with freshwater crab, pork or beef.
    </p></blockquote>
    <p><strong>Where to try</strong>: CNN Travel recommends the street stall run by Ms. Thu in <strong>Thọ Xương Alley</strong>, near <strong>St. Joseph’s Cathedral</strong>.</p>
    <h4><strong>2. Chả cá Lã vọng</strong></h4>
    <blockquote><p>
        Legend has it that a home cook named Lã Vọng invented this popular recipe, which typically is made from hemibagrus soaked in a lemony-garlic marinade and served alongside vegetables and a sweet and sour dipping sauce that is to die for.
    </p></blockquote>
    <p><strong>Where to try</strong>: <strong>Chả Cá Thăng Long</strong> on Duong Thanh in the <strong>Old Quarter</strong> topped the chart!</p>
    <h4><strong>3. Bún chả</strong></h4>
    <blockquote><p>
        According to folk tales, bún chả originated in Hanoi, and you’ll find the grilled pork and noodle dish anywhere in the <strong>Old Quarter</strong>. The pork alone is delicious, but the star of this show is a dipping sauce made of fish sauce, crushed garlic and chilies.
    </p></blockquote>
    <p><strong>Where to try</strong>: Hanoi’s first bún chả restaurant was on Gia Ngư in Hanoi’s Old Quarter, and <strong>Gia Ngư Restaurant</strong> now carries on the tradition.</p>
    <h4><strong>4. Bánh cuốn</strong></h4>
    <blockquote><p>
        Imagine wide sheets of rice noodles, stuffed with seasoned ground pork, shallots and wood ear mushrooms, and then steamed to perfection, and that’s bánh cuốn. Delish!
    </p></blockquote>
    <p><strong>Where to try</strong>: Given 4.7 stars from reviewers, <strong>Bánh Cuốn Nóng Kim Thoa</strong> is located at 49 Hàm Tử Quan, just outside Hanoi’s Old Quarter, on the banks of the <strong>Red River (Hoàn Kiếm District)</strong>.</p>
    <h4><strong>5. Banh mi</strong></h4>
    <blockquote><p>
        The French introduced the baguette to Vietnam, but locals reinvented it to create the country’s most popular street sandwich. Stuff yours with liver pâté, Vietnamese sausage, fried egg, papaya, carrots, cucumber and anything else you spot on the street food cart!
    </p></blockquote>
    <p><strong>Where to try</strong>: <strong>Nguyễn Thị Lộc</strong>, also known as the <strong>Bánh Mí Queen</strong> in Hội An, has been spooning her secret sauce over banh mi toppings for more than 50 years. It’s hard to explain where her street stall is, but any local can give you directions straight there.</p>
    <h4><strong>6. Cao Lau</strong></h4>
    <blockquote><p>
        Similar to the Japanese soba noodle, cao lầu is a regional dish. The noodles are the star, and the combinations are endless. Popular add-ins include pork and fists full of fresh greens topped with scallions, peanuts, fried pork rind and rice crackers.
    </p></blockquote>
    <p><strong>Where to try</strong>: Made from the water of an undisclosed ancient Cham well, cao lầu can only be found in Hội An, and one of the best places to try it is at <strong>Bale Well</strong>, on the outskirts of Hội An Ancient Town.</p>
    <h4><strong>7. Banh Beo</strong></h4>
    <blockquote><p>
        These tiny Vietnamese rice cakes are cute and delicious at the same time. After steaming, a dimple in the middle is filled with savory favorites like fresh shrimp, crispy shallots, scallions and mung bean paste.
    </p></blockquote>
    <p><strong>Where to try</strong>: Go see Madam Ba Do at <strong>Ba Do Restaurant</strong> in Huế.</p>
    <h4><strong>8. Bánh Xèo</strong></h4>
    <blockquote><p>
        Often mistaken for an omelet because of its color and shape, Bánh xèo is actually a rice cake that is flavored with turmeric. The batter is fried until it’s crispy on the outside and then stuffed with goodies like fatty pork slivers, shrimp, green onion and bean sprouts.
    </p></blockquote>
    <p><strong>Where to try</strong>: <strong>Ẩm Thực Xèo</strong> in Đà Nẵng serves up gourmet-style bánh xèo, and locals will tell you, it’s one of their faves.</p>
    <h4><strong>9. Cơm Tấm</strong></h4>
    <blockquote><p>
        Broken rice, or damaged rice grains, is used in dishes throughout Vietnam, but it is best known in cơm tấm. The common staple is usually served with grilled pork, either ribs or shredded, greens and pickled vegetables. It’s also not unusual to see this meal topped with prawn paste cakes, steamed egg and grilled prawns. Expect to receive a bowl of soup broth and egg meatloaf (omelet) when you order this dish.
    </p></blockquote>
    <p><strong>Where to try</strong>: Possibly the most popular and readily-available food in all of Vietnam, it’s hard to pinpoint just one great place to try it, but <strong>Cơm Tấm Thủy</strong> in Dalat is a popular choice. Head down to <strong>Bình Thạnh District</strong> in Ho Chi Minh to find this favorite local lunch spot that’s been grilling up pork on the street for more than 20 years.</p>
    <h4><strong>10. Bún Bò</strong></h4>
    <blockquote><p>
        Bún bò originated in central Vietnam but has grown wildly popular everywhere. Preparation is complicated, but in the end, you get beef shank, oxtail or sometimes pork knuckle flavored with lemongrass and swimming in a rich beef broth. Congealed pig’s blood adds to the deep burgundy color of the broth, and popular toppings include lime, cilantro, green onion, chili sauce, sliced banana blossom, red cabbage, mint, basil … and the list goes on and on and on.
    </p></blockquote>
    <p><strong>Where to try</strong>: <strong>Bún bò Chú Há</strong> in Ho Chi Minh serves bún bò in a clear, glass bowl so you get to see every last tidbit that goes into this scrumptious soup.</p>
    <h4><strong>11. Thịt bò lá lốt</strong></h4>
    <blockquote><p>
        The perfect street food, lolot, or “betel leaf” snacks, are filled with savory Vietnamese beef. While the leaves smell spicy, fans of the bite-size edibles say they have a medicinal taste, which many locals love. Try them, and you might too!
    </p></blockquote>
    <p><strong>Where to try</strong>: Because Thịt bò lá lốt is traditionally served at barbecues, you’ll find it at any market and in tons of street stalls throughout any city.</p>
    <h4><strong>12. Gỏi cuốn</strong></h4>
    <blockquote><p>
        Vietnamese spring roll, or gỏi cuốn, can contain a number of fillings. The most popular are seasoned ground pork, prawn and various local vegetables. The finger-size treats are often served with crushed peanuts and sweet and spicy dipping sauces, which vary depending on the vendor.
    </p></blockquote>
    <p><strong>Where to try</strong>: Gỏi cuốn is easy to find on any street corner in Vietnam. The preparation alone is a sight to behold. Watch in amazement as local cooks pile on toppings and skillfully roll them up tight in the sticky, tricky rice paper.</p>
</div>',
            ],
            [
                'title'=>'Wine Tasting Tours: Regions & Vineyards with Toast-Worthy Wineries',
                'image'=>'blog-2.jpg',
                'category'=>'Traveling',
                'content'=>'Some of the best wine tasting tours in the world include scenic walks through vineyards, grape-stomping experiences, and of course, sampling wine! Learn how to properly appreciate Chianti while touring a castle in Tuscany, or pour a glass of Bordeaux in a château in France. Wine is a beautiful thing and so are the regions in which it is grown, so pop the cork, and make a toast to your next (or first) wine tasting tour!
<div class="col">
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Napa Valley"
        data-recalc-dims="1" src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/Napa-Valley-wine-region-wine-tasting-tours.jpg"></span></p>
    <h4><strong>1. Wine Tasting Tours | Napa Valley, USA</strong></h4>
    <p>With more than 400 wineries to visit, <strong>Napa Valley</strong>
        in California contains all the essentials of a proper wine tasting tour. First-timers can board the historic
        <strong>Napa Valley Wine Train</strong> for a tour of the region and a gourmet meal and sign up for a food
        and wine class at <strong>The CIA at Copia (The Culinary Institute of America)</strong>. Sommeliers, or wine
        experts, will want to walk down <strong>Silverado Trail</strong> and sample selections from more than 40
        local wineries.</p>
    <p>Many of the wineries in <strong>Napa Valley</strong> specialize in
        Cabernet Sauvignon (red) and Chardonnay (white) wine, but each has its own unique flavors and added touches.
        Visit <strong>Schramsberg Vineyards</strong> to tour historic wine caves and sip sparkling wine, or create
        your own blend in a barrel at <strong>Conn Creek Winery</strong>. At all wineries in <strong>Napa
            Valley</strong>, guests are encouraged to chat with winemakers, photograph vineyards and savor the
        flavors that make <strong>Napa Valley</strong> wines some of the most popular in the
        world.</p>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Napa Valley-Sterling Vineyards-Newton Vineyard"
        data-recalc-dims="1"
        src="https://i1.wp.com/www.agoda.com/wp-content/uploads/2019/09/Sterling-Vineyards-Newton-Vineyard-wine-tasting-tours.jpg"></span></p>
    <h5><strong>Best wineries in Napa Valley</strong></h5>
    <ul>
        <li><strong>Sterling Vineyards</strong> – this Mediterranean-style winery invites guests to sample wine
            while viewing <strong>Napa Valley</strong> from an aerial tram. Tickets for tram
            ride tours are $35 per person. Visitors under the age of 21 can take the tour for $20. Children under
            three are free.
        </li>
        <li><strong>Newton Vineyard</strong> – as artsy as it is productive, this vineyard atop <strong>Spring
            Mountain</strong> in <strong>St. Helena</strong> features decadent
            gardens and vintage wines.
        </li>
        <li><strong>Castello di Amorosa</strong> – considered the cream of the crop of vineyards in <strong>Napa
            Valley</strong>, <strong>Castello di Amorosa</strong> is a 13th-century-inspired winery with a
            castle! Tour the grounds to learn the wine legacy of the Sattui family and how they honor their Italian
            heritage through wine.
        </li>
        <li><strong>Cuvaison Estate Wines</strong> – serving modern blends in a historic
            setting, <strong>Cuvaison Estate Wines</strong> offers wine tastings in the
            intimate <strong>Carneros Valley</strong> region, where guests can admire <strong>Milliken Peak</strong>
            while savoring some of the finest wines in the region.
        </li>
        <li><strong>Chateau Montelena Winery</strong> – walk-ins are welcome at <strong>Chateau Montelena
            Winery</strong> in the foothills of <strong>Mount Saint Helena</strong>. Guests can enjoy “A Taste of
            Montelena” from 9:30 a.m. to 4 p.m. daily inside a stone castle. The castle overlooks the vineyard, as
            well as a Chinese garden and lake area, which guests are free to explore.
        </li>
    </ul>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Tuscany"
        data-recalc-dims="1" src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/Wine-region-Tuscany-Italy-wine-tasting-tours.jpg"></span></p>
    <h4><strong>2. Wine Tasting Tours | Tuscany, Italy</strong></h4>
    <p>Vineyards throughout Italy are known not only for their wines but also for their centuries-old heritage, and
        the wineries in <strong>Tuscany</strong> are some of the most historic.
        One of the easiest ways to see vineyards in <strong>Tuscany</strong>
        is to book a tour with <strong>Chianti Wine Tour</strong> in <strong>Florence</strong>, which offers day-long tours that are family-friendly and include a
        complimentary pickup from your hotel. Many guests to the area opt to get a bird’s-eye view of the region
        from a hot air balloon. Several companies offer hot air balloon rides, and tickets can be booked online.
        “Ballooning” is available year-round, but the best time to fly is between April and November.</p>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Tuscany-Castello di Fonterutoli-Poderi Di Capo Duomo Estate"
        data-recalc-dims="1"
        src="https://i1.wp.com/www.agoda.com/wp-content/uploads/2019/09/Poderi-Di-Capo-Duomo-Estate-Poggio-al-Casone-wine-tasting-tours.jpg"></span></p>
    <h5><strong>Best vineyards in Tuscany</strong></h5>
    <ul>
        <li><strong>Castello di Fonterutoli</strong> – steeped in history and culture,
            <strong>Castello di Fonterutoli</strong> introduces guests to fine Italian
            wines and the history of the <strong>Chianti</strong> region. The grounds of <strong>Castello di Fonterutoli</strong> contain five production areas and
            73 vineyards, and guests can choose between wine tasting tours of Tenuta di Belguardo or Mazzei. The
            vineyard also is known for its olive oils, grappas and organic products made with handpicked, native
            lavender.
        </li>
        <li><strong>Poderi Di Capo Duomo Estate</strong> – head to the lagoon in <strong>Grosseto</strong> to sample specialty wines grown on terraces stacked right next to
            the ocean. <strong>Poderi Di Capo Duomo Estate</strong>’s most notable blends are Africo and Maisto,
            named after the winds that blow along the Tuscan coast.
        </li>
        <li><strong>Poggio al Casone</strong> – just outside Pisa is where wine
            connoisseurs will find specialty wines grown on a private estate. Guests can take a day tour or opt to
            spend the night in one of two exclusive cottages.
        </li>
        <li><strong>Castellare di Castellina</strong> – distinguished by its climate, which tends to be a few
            degrees warmer than the rest of the region, <strong>Castellare di Castellina</strong> offers tours that
            highlight wine as much as the estate’s commitment to bio-diversity.
        </li>
        <li><strong>Fontodi Winery</strong> – famous for its picturesque amphitheater shape, <strong>Fontodi
            Winery</strong> practices organic farming and offers some of the most affordable wines in Italy’s famed
            wine region. Guests can stay on the grounds or take a day tour to learn about the winery as well as the
            olive groves and cattle at the vineyard.
        </li>
    </ul>
    <p><span style="display: block; text-align: center;"><img
        alt="Hotels near vineyards-wine tasting tour-Plaza Hotel Lucchesi"
        data-recalc-dims="1" src="https://i2.wp.com/www.agoda.com/wp-content/uploads/2019/09/Plaza-Hotel-Lucchesi-hotels-near-vineyards-wine-tasting-wineries.jpg"></span></p>
    <h4><strong>3. Wine Tasting Tours | Bordeaux, France</strong></h4>
    <p>Stretching for more than 50 miles between the Dordogne and Garonne rivers, the <strong>Bordeaux</strong> wine region is one of the most renowned wine-producing areas in the
        world. Most of the wine produced in <strong>Bordeaux</strong> is red, but Sauternes, a sweet white, also is produced here.
        <strong>Médoc</strong> and <strong>Saint-Émilion</strong> are two of the most popular areas to tour, but
        <strong>Graves</strong> and <strong>Pauillac</strong> also draw their
        fair share of both experts and novices.</p>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Bordeaux-Château Franc-Mayne-Château La Dominique"
        data-recalc-dims="1"
        src="https://i1.wp.com/www.agoda.com/wp-content/uploads/2019/09/Ch%C3%A2teau-Franc-Mayne-Ch%C3%A2teau-Gruaud-Larose-wine-tasting-tours.jpg"></span></p>
    <h5><strong>Best châteaus in Bordeaux</strong></h5>
    <ul>
        <li><strong>Château Franc-Mayne, Saint-Émilion</strong> – guests to <strong>Château Franc-Mayne</strong> can sample
            local wines as well as tour underground caves. The estate offers five guesthouses for visitors who want
            to stay on the premises. One of the villas is a “tree cabin” perched in a cedar tree and featuring views
            over the vineyard.
        </li>
        <li><strong>Château La Dominique, Saint-Émilion</strong> – lunch at <strong>La Terrasse Rouge</strong> is an essential
            feature of touring <strong>Château La Dominique</strong>. The rooftop restaurant offers incredible views
            of the estate, and experts will pair the perfect wines with a three-course meal.
        </li>
        <li><strong>Château Gruaud Larose, Saint-Julien-Beychevelle</strong> – sophisticated and stylish, <strong>Château
            Gruaud Larose</strong> takes guests to a the heights of a tower before descending into underground
            cellars where the wine tasting ensues. Visitors also have the choice of adding cheese and chocolate to
            their wine tasting tours.
        </li>
        <li><strong>Château Peyrabon, Pauillac</strong> – affordable and tasty
            Cabernet Sauvignon is what draws tourists to <strong>Château Peyrabon</strong>, which offers tours of
            the estate’s vineyards and wine cellars as well as incite to the wine-making process.
        </li>
        <li><strong>Château Smith Haut Lafitte, Graves</strong> – <strong>Château Smith Haut Lafitte</strong> is
            known for its sophisticated wines and even more sophisticated vineyard, which features an open-air
            museum and hands-on workshops.
        </li>
    </ul>
    <p><span style="display: block; text-align: center;"><img
        alt="Hotels near vineyards-wine tasting tour-Hotel La Maison Bordeaux"
        data-recalc-dims="1" src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/Hotel-La-Maison-Bordeaux-hotels-near-vineyards-wine-tasting-wineries.jpg"></span></p>
    <div class="separator"></div>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Yarra Valley"
        data-recalc-dims="1" src="https://i2.wp.com/www.agoda.com/wp-content/uploads/2019/09/Yarra-Valley-Australian-wine-tasting-tours.jpg"></span></p>
    <h4><strong>4. Wine Tasting Tours | Yarra Valley, Australia</strong></h4>
    <p>Loved for its charming landscape and the 80-plus wineries that occupy it, <strong>Yarra
        Valley</strong> makes for a wonderful daytrip from <strong>Melbourne</strong>.
        Guests to the region can pop from winery to winery sampling Chardonnay, Pinot Noir and Syrah and pairing
        their favorites with gourmet meals from local restaurants. <strong>Yarra
            Valley</strong> also is a popular place to mingle with some of Australia’s wildlife while strolling
        through local vineyards.</p>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Yarra Valley-TarraWarra Estate-Oakridge Wines"
        data-recalc-dims="1"
        src="https://i2.wp.com/www.agoda.com/wp-content/uploads/2019/09/TarraWarra-Estate-or-Oakridge-Wines.jpg?ssl=1"></span></p>
    <h5><strong>Best vineyards in Yarra Valley</strong></h5>
    <ul>
        <li><strong>TarraWarra Estate</strong> – this contemporary winery features an art gallery and restaurant
            that serves locally-sourced foods as well as wine tastings for as little as $5 per person.
        </li>
        <li><strong>Oakridge Wines</strong> – dine on locally-sourced produce while sipping award-winning wines at
            this contemporary winery that opened in 1978.
        </li>
        <li><strong>Yering Farm Wines</strong> – a rustic estate featuring gorgeous views of <strong>Yarra
            Valley</strong>, <strong>Yering Farm Wines</strong> showcases their products through wine tasting
            tours, onsite picnics and fireside dinners on an open veranda.
        </li>
        <li><strong>Domaine Chandon</strong> – a leader in sparkling wines and champagnes, <strong>Domaine
            Chandon</strong> invites guests to take self-guided tours of the vineyard and barrel halls, which
            feature interactive guides on the wine-making process.
        </li>
        <li><strong>Yering Station Winery</strong> – groups of 10 or fewer are treated to complimentary wine tasting
            tours at <strong>Yering Station</strong>, one of the oldest and most scenic wineries in <strong>Yarra
                Valley</strong>.
        </li>
    </ul>
    <h4><strong>Check In to Yering Gorge Cottages, Step Out to Yarra
        Valley</strong></h4>
    <p><span style="display: block; text-align: center;"><img
        alt="Hotels near vineyards-wine tasting tour-Yering Gorge Cottages"
        data-recalc-dims="1" src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/Yering-Gorge-Cottages-hotels-near-vineyards-wine-tasting-wineries.jpg"></span></p>
    <div class="separator"></div>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Santorini"
        data-recalc-dims="1" src="https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/09/Santorini-Greece-wine-region-wine-tasting-tours.jpg"></span></p>
    <h4><strong>5. Wine Tasting Tours | Santorini, Greece</strong></h4>
    <p>An island paradise in the Aegean Sea, <strong>Santorini</strong>
        is a prominent, yet not very well known, wine region with a long but somewhat secret history. The island’s
        wines have a unique taste because of the volcanic soils in the region, and local varieties can be sampled at
        the vineyards themselves or in hundreds of restaurants throughout <strong>Santorini</strong>. One of the most interesting wine tasting tours in
        <strong>Santorini</strong> is at
        <strong>ArtSpace</strong>, a contemporary art gallery built eight meters
        underground in the carved pumice rock of an old winery.</p>
    <p><span style="display: block; text-align: center;"><img
        alt="Wine tasting tours-vineyards-wineries-Santorini-Estate Argyros-Koutsoyannopoulos Wine Museum"
        data-recalc-dims="1"
        src="https://i1.wp.com/www.agoda.com/wp-content/uploads/2019/09/Estate-Argyros-Koutsoyannopoulos-Wine-Museum-wine-tasting-tours.jpg"></span></p>
    <h5><strong>Best wineries in Santorini</strong></h5>
    <ul>
        <li><strong>Gaia</strong> – situated on the seashore and featuring majestic sunset views,
            <strong>Gaia</strong> offers local red and white wines that can be sipped while lounging on a black sand
            beach.
        </li>
        <li><strong>Gavalas Winery</strong> – nestled in the village of <strong>Megalochori</strong>, <strong>Gavalas Winery</strong> is famous
            locally for its Vinsanto variety. The wine has been designated the Best Dessert Wine in the World, and
            quantities are limited, so guests should be sure to request a sample when available.
        </li>
        <li><strong>Estate Argyros</strong> – a breathtaking adventure in art and wine, <strong>Estate
            Argyros</strong>’ vineyard dates back to the 1850s and is one of the oldest in the region. The
            fourth-generation winery produces full-bodied reds and three selections of white wines.
        </li>
        <li><strong>Koutsoyannopoulos Wine Museum</strong> – a winery and museum rolled into one, <strong>Koutsoyannopoulos
            Wine Museum</strong> dates to 1870, and guests can study the history of wine making and wine culture in
            Greece while sampling wines and touring the historic estate.
        </li>
        <li><strong>Santo Wines</strong> – for a well-rounded sampling of <strong>Santorini</strong> wines, take a trip to <strong>Santo Wines</strong> on the west
            coast of the island at the edge of <strong>Faros Akrotiriou-Oias (Thiras Thesi Kalnteras)</strong>, a
            park and wildlife refuge. The cooperative winery showcases high-quality, local wines produced through
            sustainable agriculture by producers in the <strong>Santorini</strong>
            region.
        </li>
    </ul>
    <h4><strong>Check In to Dome Santorini Resort, Step Out to Santorini</strong>
    </h4>
    <p><span style="display: block; text-align: center;"><img
        alt="Hotels near vineyards-wine tasting tour-Dome Santorini Resort"
        data-recalc-dims="1" src="https://i1.wp.com/www.agoda.com/wp-content/uploads/2019/09/Dome-Santorini-Resort-hotels-near-vineyards-wine-tasting-wineries.jpg"></span></p>

</div>',
            ],
            [
                'title'=>'Winter Illuminations: 7 Magical Christmas & Holiday Light Displays',
                'image'=>'blog-3.jpg',
                'category'=>'Traveling',
                'content'=>'Spring might be right around the corner, but it’s not too late to find winter illuminations! Whether you’re relaxing by the waterfront at Luci d’Artista in Salerno, Italy, or bundling up on Mido-suji Avenue in Osaka, Japan, winter illuminations make the winter season a whole lot brighter!',
            ],
            [
                'title'=>'Fuss-Free Family Holidays | Guide to 7 Kid-Friendly Destinations in Asia',
                'image'=>'blog-4.jpg',
                'category'=>'Traveling',
                'content'=>'Every city has its bright spots, but Asian cities have some of the best. With a little pre-planning, you can find a mix of favorites for fuss-free family holidays, each of which are kid-tested and parent-approved. Whether you stick to a strict checklist or play it by ear, add these activities to your itinerary, and let the family holiday fun begin!',
            ],
            [
                'title'=>'All-Inclusive Holidays | 7 Asian Wellness Retreats & Resort Spas',
                'image'=>'blog-5.jpg',
                'category'=>'Traveling',
                'content'=>'Fit for families, backpackers and honeymooners, all-inclusive holidays take the strain out of any getaway. Instead of wasting precious vacay time planning activities one-by-one, bundle up on everything from brunches to jungle treks, and be ready to roll before you go!',
            ],
            [
                'title'=>'Asian Food Guide: 8 Curry Dishes & the Best Places to Try Them First!',
                'image'=>'blog-6.jpg',
                'category'=>'Traveling',
                'content'=>'Thick and creamy, warm and filling, nothing says comfort food like CURRY! Immediately recognized by their sensual aromas, curries around the world typically consist of coriander, cumin, turmeric and coconut milk, but nearly every country in the world adds its own twist. The Japanese like their curry thick and sweet, while Cambodians heap on the shrimp paste. India generally gets the credit for the creation of this gorgeous stew, but Europeans love it so much that the UK crowned curry its national dish! Spicy, lemony, soupy or hearty – travel through Asia to try them all!',
            ]
        ]);
    }
}
