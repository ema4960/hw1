
<html lang="it">
    <head>
        <title>Autoscout24</title>
        <link rel="stylesheet" href="/hw1/mhw1.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/hw1/mhw2.js" defer></script>
    </head>
    <body>
        
        <header class="header">
            <button   class="burger">
                <img src="../burger.svg" alt="" srcset="">
            </button>
            <a href="../index.php"><img src="../logo_autoscout.svg" alt="" srcset=""></a>
            <nav class="header_nav_left">
                <button id="button1"><p>Ricerca</p> <img id="img1" src="/hw1/scorri-giù-white.png"></button>
                <button id="button2"><p>Vendi</p><img id="img2" src="/hw1/scorri-giù-white.png"></button>
                <div>
                <button id="button3">
                    <p>Megazine & Informazioni</p> <img id="img3" src="/hw1/scorri-giù-white.png">
                    </button>
                    <ul class="displayNone" id="meg">
                        <li><a href="/hw1/pages/miglioriAuto.php">Migliori Auto</a></li>
                    </ul>
                </div>
                <button id="button4"><p>Auto usate più popolari</p> <img id="img4"  src="/hw1/scorri-giù-white.png"></button>
                <div id="wheater">
                    <input type="text" id="city" value="catania">
                    <p id="temp"></p>
                </div>
            </nav>
            <nav class="header_nav_right">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fff"></path> </g></svg>
                <img id="whitebell" src="/hw1/whiteBell.svg" alt="" srcset="">
                <button id="login_button" class="displayBlock">Login</button>
                <div id="logged" class="displayNone">
                    <p id="username"><?php session_start(); echo $_SESSION["username"]; ?></p>
                    <button id="logout">Logout</button>
                </div>
                <button id="italianFlag"><img src="/hw1/italianFlag.svg" alt="" srcset=""></button>
            </nav>
        </header>
        <div id="loginds" class="displayNone log">
            <img src="/hw1/logo_autoscoutblack.svg" alt="" srcset=""><img src="/hw1/XcloseLog.svg" id="closeLoginds" alt="" srcset="">
            <h2>Effettua un login o registrati</h2> 
            <p>Accedi e salva tutte le ricerche in un unico posto.</p>
            <button>Sei un rivenditore? <span>Clicca qui!</span></button>
            <div>
                <label>email</label>
                <input id="mailInput" type="text" type="email" placeholder="Es. mariorossi@Example.com">
                <button id="mailBt" class="yellowButton">Continua con l'indirizzo e-mail</button>
                <p> - o - </p>
                <button class="socialLogBt">Continua con Google</button>
                <button class="socialLogBt">Continua con Facebook</button>
                <button class="socialLogBt">Continua con Apple</button>
            </div>
        </div>
        
        <div id="login" class="displayNone log">
            <img src="/hw1/logo_autoscoutblack.svg" alt="" srcset=""><img src="/hw1/XcloseLog.svg" id="closeLogin" alt="" srcset="">
            <h2>Effettua un login</h2> 
            <p>Accedi e salva tutte le ricerche in un unico posto.</p>
            <div>
                <label>email</label>
                <input id="mailInputLog" type="text" type="email" placeholder="Es. mariorossi@Example.com">
                <label>password</label>
                <input id="passwordInputLog" type="text" type="password" placeholder="password">
                <button class="yellowButton" id="loginBt">Login</button>
            </div>
        </div>

        <div id="register" class="displayNone log">
            <img src="logo_autoscoutblack.svg" alt="" srcset=""><img src="XcloseLog.svg" id="closeRegister" alt="" srcset="">
            <h2>Effettua la registrazione</h2> 
            <p>Registrati e salva tutte le ricerche in un unico posto.</p>
            <form action="/hw1/scriptPhp/register.php" method="post">
                <section>
                    <label>username:</label>
                    <input name="username" type="text"  placeholder="">
                </section>
                <section>
                    <label>email:</label>
                    <input name="email" type="email" placeholder="Es. mariorossi@Example.com">
                </section>
                <section>
                    <label >password:</label>
                    <input name="password" type="password"  placeholder="">
                </section>
                <section>
                    <input type="submit" value="Registrati" />  
                </section>
                
                
            </form>
        </div>


        <section class="contenuto">
            <div class="title"><h1>Novità</h1></div>
            <div class="cont">
                <h3>Novità: articoli più recenti</h3>
                <div class="article">
                    <img src="/hw1/novita_rav4.jpeg" alt="">
                    <div>
                        <h4>Nuovo Toyota RAV4: una nuova era tra prestazioni, efficienza e intelligenza digitale</h4>
                        <p>Il Toyota RAV4 torna protagonista nel panorama SUV europeo con una sesta generazione che ridefinisce il concetto di versatilità, potenza ed efficienza. </p>
                    </div>      
                </div>
                <hr>
                <div class="article">
                    <img src="/hw1/novita_rottamazione.jpeg" alt="">
                    <div>
                        <h4>Auto, nuova rottamazione con incentivi da 597 milioni</h4>
                        <p>Nuovi incentivi auto in arrivo. È questo quello che emerge nella proposta di revisione del Pnrr approvata dalla cabina di regia del Governo dove spunta un bonus per acquistare 39mila veicoli elettrici grazie ai soldi non utilizzati per l’acquisto con incentivo delle colonnine di ricarica.</p>
                    </div>      
                </div>
                <hr>
                <div class="article">
                    <img src="/hw1/novita_jeepCompass.jpeg" alt="">
                    <div>
                        <h4>Nuova Jeep Compass 2025: ibrida oppure elettrica con prezzi da 41.900 euro</h4>
                        <p>Con oltre 2,5 milioni di clienti conquistati dal debutto nel 2006, la Jeep Compass si rinnova per affrontare le sfide del segmento C-SUV, il più competitivo d’Europa. </p>
                    </div>      
                </div>
            </div>
        </section>


        

        <footer class="footer">
            <div class="footer_notes">
                <sup>1</sup> IVA deducibile
                <br><sup>2</sup> I dati di consumi ed emissioni per le auto usate si intendono riferiti al ciclo NEDC. Per le auto nuove, a partire dal 16.2.2021, iI rivenditore deve indicare i valori relativi al consumo di carburante ed emissione di CO2 misurati con il ciclo WLTP. Il rivenditore deve rendere disponibile nel punto vendita una guida gratuita su risparmio di carburante e emissioni di CO2 dei nuovi modelli di autovetture. Anche stile di guida e altri fattori non tecnici influiscono su consumo di carburante e emissioni di CO2. Il CO2 è il gas a effetto serra principalmente responsabile del riscaldamento terrestre.
                <br><sup>3</sup> Prezzo finale offerto al pubblico, comprensivo di IVA, non vincolato all’acquisto di un finanziamento, a permuta o rottamazione. Passaggio di proprietà e IPT esclusi.
            </div>

            <div id="torna_su">
                <a href="#" >Torna su <img src="/hw1/rowUp.svg" alt="" srcset=""></a>
            </div>

            <h2 class="footer_title">Benvenuti su AutoScout24, il mercato auto europeo.</h2>
            <div class="footer_links">
                <ul id="societa">
                    <label for="">Società</label>
                    <li>A proposito di Autoscout24</li>
                    <li>Stampa</li>
                    <li>Condizioni generali</li>
                    <li>Informazioni</li>
                    <li>Privacy</li>
                    <li>Dichiarazione di accessibilità</li>
                </ul>
                <ul id="servizi">
                    <label for="">Servizi</label>
                    <li>Contatti</li>
                    <li>Marche e modelli</li>
                    <li>Auto usate per regione</li>
                    <li>Consigli</li>
                </ul>
                <ul id="venditori">
                    <label for="">Area venditori</label>
                    <li>Servizi per i dealer</li>
                    <li>Login</li>
                    <li>Registrazione</li>
                    <li>Contatti</li>
                </ul>
                <section id="social">
                    <h3>Sempre con te</h3>
                    <a href=""><p>Autoscout24 per IOS</p></a>
                    <a href=""><p>Autoscout24 per Android</p></a>
                </section>
            </div>
            <div class="copyright">
                © Copyright 2025 a cura di AutoScout24 GmbH. Tutti i diritti riservati. | AutoScout24 Italia S.p.a. - P. IVA IT03384980284
                AutoScout24.it, AutoProff, LeasingMarkt.de, Media e Smyle fanno parte della famiglia AutoScout24.
            </div>
        </footer>
        
        

    </body>
</html>

