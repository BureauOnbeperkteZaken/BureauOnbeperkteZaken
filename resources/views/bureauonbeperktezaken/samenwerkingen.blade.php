<x-page.fullwidth :cards="true">
    <style>
        .flex-test {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .flex-test-two {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .flex-test-inline {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin: 5px;
        }

        .flex-test>div {
            width: 32%;
        }

        .flex-test-two>div {
            width: 45%;
        }

        .flex-test-inline>.photo-test {
            width: 50%;
            height: 100%;
            align-items: center;
            text-align: justify;
        }

        .flex-test-inline>.photo-test img {
            width: 100%;
            height: 100%;
            padding: 5px;
            object-fit: scale-down;
        }

        .flex-test-inline>.text-test {
            display: flex;
            flex-direction: column;
            width: 50%;
            height: 50%;
        }

        .flex-test-inline>.text-test button {
            justify-self: flex-end;
        }
    </style>
    <h1>Samenwerkingen</h1>
    <div class="paragraph flex-test-two">
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Gemeente-Vught.png') }}" alt="Afbeelding gemeente Vught">
            </div>
            <div class="text-test">
                <h2>Gemeente Vught</h2>
                <p>Netty Verhagen Anja de Jonge</p>
                <button>
                    <a href="https://vught.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Moved-Media.jpg') }}" alt="Logo Moved Media">
            </div>
            <div class="text-test">
                <h2>Moved Media</h2>
                <p>Peter van den Dungen</p>
                <button>
                    <a href="https://www.movedmedia.nl//">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
    </div>
    <h1>Comité van aanbevelingen</h1>
    <div class="paragraph flex-test">
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/ZomaarZichtbaar.jpg') }}" alt="Logo Zomaar Zichtbaar">
            </div>
            <div class="text-test">
                <h2>Maarten Zomers</h2>
                <p>Maarten Zomers</p>
                <button>
                    <a href="https://zomaarzichtbaar.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Scarable.png') }}" alt="Logo Scarable">
            </div>
            <div class="text-test">
                <h2>Scarabee Films</h2>
                <p>Hetty Naaijkens</p>
                <button>
                    <a href="https://scarabeefilms.com/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/NoortjeVanLith.jpg') }}" alt="Foto Noortje van Lith">
            </div>
            <div class="text-test">
                <h2>Noortje van Lith</h2>
                <p>Op wielen! Soms is er een aanpassing nodig voor gelijke behandeling</p>
                <button>
                    <a href="https://www.noortjevanlith.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/van-kruisdijk.jpg') }}" alt="Logo van Kruisdijk">
            </div>
            <div class="text-test">
                <h2>Van Kruisdijk Notarissen</h2>
                <p>Notaris Kruijsdijk</p>
                <button>
                    <a href="https://www.vankruijsdijknotarissen.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Kunstloc-brabant.png') }}" alt="Logo Kunstloc Brabant">
            </div>
            <div class="text-test">
                <h2>Kunstloc Brabant</h2>
                <p>Atty Bax</p>
                <button>
                    <a href="https://www.kunstlocbrabant.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Nieuwerwets.png') }}" alt="Logo Nieuwerwets">
            </div>
            <div class="text-test">
                <h2>Nieuwerwets Creatief</h2>
                <p>Roel van Gemert</p>
                <button>
                    <a href="https://nieuwerwetscreatief.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/AVE.jpeg') }}" alt="Logo Albert van der Linde">
            </div>
            <div class="text-test">
                <h2>Albert Verlinde</h2>
                <p>Ik juich de doelstellingen van de stichting "Bureau Onbeperkte Zaken" ten zeerste toe.</p>
                <button>
                    <a href="https://nl.wikipedia.org/wiki/Albert_Verlinde">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
        <div class="flex-test-inline">
            <div class="photo-test">
                <img src="{{ asset('storage/uploads/Hans-Kroon.jpg') }}" alt="Logo Hans Kroon">
            </div>
            <div class="text-test">
                <h2>Hans Kroon Advies & Zorg</h2>
                <p>Hans Kroon</p>
                <button>
                    <a href="https://hanskroonadvies.nl/">
                        Lees meer
                    </a>
                </button>
            </div>
        </div>
    </div>
</x-page.fullwidth>