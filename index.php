
<html lang="it">
    <head>
        <title>Autoscout24</title>
        <link rel="stylesheet" href="mhw1.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="mhw2.js" defer></script>
    </head>
    <body>
        
        <header class="header">
            <button   class="burger">
                <img src="burger.svg" alt="" srcset="">
            </button>
            <img src="logo_autoscout.svg" alt="" srcset="">
            <nav class="header_nav_left">
                <button id="button1"><p>Ricerca</p> <img id="img1" src="scorri-giù-white.png"></button>
                <button id="button2"><p>Vendi</p><img id="img2" src="scorri-giù-white.png"></button>
                <div>
                    <button id="button3">
                        <p>Megazine & Informazioni</p> <img id="img3" src="scorri-giù-white.png">
                    </button>

                    <ul class="displayNone" id="meg">
                        <li><a href="/hw1/pages/novita.php">novità</a></li>
                        <li><a href="/hw1/pages/miglioriAuto.php">Migliori Auto</a></li>
                    </ul>
                </div>
                <button id="button4"><p>Auto usate più popolari</p> <img id="img4"  src="scorri-giù-white.png"></button>
                <div id="wheater">
                    <input type="text" id="city" value="catania">
                    <p id="temp"></p>
                </div>
            </nav>
            <nav class="header_nav_right">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="#fff"></path> </g></svg>
                <img id="whitebell" src="whiteBell.svg" alt="" srcset="">
                <button id="login_button" class="displayBlock">Login</button>
                <div id="logged" class="displayNone">
                    <p id="username"><?php session_start(); echo $_SESSION["username"]; ?></p>
                    <button id="logout">Logout</button>
                </div>
                <button id="italianFlag"><img src="italianFlag.svg" alt="" srcset=""></button>
            </nav>
        </header>
        <div id="loginds" class="displayNone log">
            <img src="logo_autoscoutblack.svg" alt="" srcset=""><img src="XcloseLog.svg" id="closeLoginds" alt="" srcset="">
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
            <img src="logo_autoscoutblack.svg" alt="" srcset=""><img src="XcloseLog.svg" id="closeLogin" alt="" srcset="">
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
            <div class="filtri">
                <div>
                    <select name="marca">
                        <option value="">Marca</option>
                        <option value="Audi">Audi</option>
                    </select>
                    <select name="modello">
                        <option value="">Modello</option>
                        <option value="Audi">A1</option>
                    </select>
                    <select name="prezzo">
                        <option value="">Prezzo fino a ($)</option>
                        <option value="Audi">500</option>
                        <option value="Audi">1000</option>
                    </select>
                </div>
                <div>
                    <select name="anno">
                        <option value="">Anno da</option>
                        <option value="Audi">2025</option>
                    </select>
                    <input type="text" value="Città/CAP">    
                    <button class="yellowButton">358 risultati</button>
                </div>
                <div>
                    <a href="http://">Ricerca avanzata</a>
                </div>
                
            </div>
            <div class="tendina">
                <button><p>Apri il menù a tendina</p></button>
            </div>

            <div class="pubblicita_mobile">
                <p>Pubbiclità</p>
                <img src="pubblicitàAS.jpeg" alt="">
            </div>

            <div class="ricerche">
                    <div class="contenitore_ricerche">
                        <div class="ultima_ricerca">
                        <div id="card_logo"><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"><path fill="#333" d="M23 0a16 16 0 1 1-10.57 28l-9.75 9.72a1 1 0 1 1-1.41-1.41L11 26.57A16 16 0 0 1 23 0m0 2C15.268 2 9 8.268 9 16s6.268 14 14 14a14 14 0 0 0 14-14c0-7.732-6.268-14-14-14m1.44 6a2 2 0 0 1 1.71 1l2.42 4H30a4 4 0 0 1 4 4v3a2 2 0 0 1-2 2h-1.19a3 3 0 0 1-5.63 0h-4.37a3 3 0 0 1-5.63 0H14a2 2 0 0 1-2-2v-5.73a2 2 0 0 1 .29-1L14.86 9a2 2 0 0 1 1.71-1zM18 20a1 1 0 1 0 0 2 1 1 0 0 0 0-2m10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-3.56-10h-7.87l-1.8 3H17a1 1 0 0 1 0 2h-3v5h1.19a3 3 0 0 1 5.63 0h4.37a3 3 0 0 1 5.63 0H32v-3a2 2 0 0 0-2-2h-2a1 1 0 0 1-.85-.49zM23 12a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1"></path></svg></div>
                        <div id="filtri">
                            <p>La tua ultima ricerca</p>
                            <h3>Toyota Land Cruiser</h3>
                        </div>
                        </div>
                        <div id="salva_ricerca">
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path fill="#333" fill-rule="nonzero" d="M11 0c5 0 9 4 9 9s-4 9-9 9c-2.1 0-4.1-.8-5.6-2l-3.7 3.7c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4L4 14.6C2.7 13.1 2 11.1 2 9c0-5 4-9 9-9m0 2C7.1 2 4 5.1 4 9s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7m-.2 3.2c0-.2.3-.2.4 0L12 8h2.8c.2 0 .3.3.1.4L13 10l.9 2.6c.1.2-.1.4-.3.3L11 11l-2.6 2c-.2.1-.5-.1-.4-.3L9 10 7 8.4c-.1-.1 0-.4.2-.4H10Z"></path></svg><p>Salva Ricerca</p></button>
                        </div>
                    </div>
                    
                <div id="piu_ricercati">
                    <p>I più richiesti del momento</p>
                    <div id="categories">
                        <div>
                            <img class="img_categories" src="autocitta.webp" alt="">
                            <p>Auto per la città</p>
                        </div>
                        <div>
                            <img class="img_categories" src="autoelettriche.webp" alt="">
                            <p>Auto elettriche</p>
                        </div>
                        <div>
                            <img class="img_categories" src="autofamiglia.webp" alt="">
                            <p>Auto per la famiglia</p>
                        </div>
                        <div>
                            <img class="img_categories" src="autoneopatentati.webp" alt="">
                            <p>Auto per neopatentati</p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="inizia_vendere">
                <a href=""><p>Vendi la tua auto in modo semplice,rapido e gratuito. </p><span> Inizia a vendere</span></a>
            </div>

            <div class="pubblicita_desktop">
                <p>Pubbiclità</p>
                <img src="pubblicitaAS_desktop.jpeg" alt="">
            </div>

            <h4>Ultimi risultati della tua ultima ricerca</h4>
            <div class="ultime_ricerche">
                <div id="ultima_ricerca1" >
                    <img src="" alt="">
                    <h4>Toyota Land Cruiser</h4>
                    <p>€ 16.900</p>
                    <button class="salvaRicerca" data-index-number="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" data-testid="favorite-icon" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M22.434 9.234A1.995 1.995 0 0020.586 8h-4.893l-1.82-4.854A1.982 1.982 0 0012 1.849c-.843 0-1.577.509-1.873 1.297L8.307 8H3.414c-.811 0-1.537.484-1.848 1.234-.311.75-.14 1.606.434 2.18.031.031.063.06.099.086l3.795 2.911-1.103 5.304A1.965 1.965 0 005.68 21.9c.331.205.695.307 1.057.307.461 0 .918-.165 1.296-.489l3.968-3.4 3.967 3.399c.676.58 1.601.65 2.354.184.756-.467 1.104-1.324.898-2.147l-1.111-5.342 3.794-2.911a1 1 0 00.099-.086 2.001 2.001 0 00.432-2.181zm-6.042 3.973a1 1 0 00-.371.997l1.248 5.994-4.619-3.958a.997.997 0 00-1.3 0l-4.61 3.921 1.239-5.957a1 1 0 00-.371-.997L3.429 10H9c.417 0 .79-.259.937-.648l2.06-5.514.004.01v.001l2.063 5.503A1 1 0 0015 10h5.571l-4.179 3.207z"></path></svg></button>
                </div>
                <div id="ultima_ricerca1" >
                    <img src="/hw1/UltimeRic_nissanGTR.jpg" alt="">
                    <h4>Toyota Land Cruiser</h4>
                    <p>€ 16.900</p>
                    <button class="salvaRicerca" data-index-number="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" data-testid="favorite-icon" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M22.434 9.234A1.995 1.995 0 0020.586 8h-4.893l-1.82-4.854A1.982 1.982 0 0012 1.849c-.843 0-1.577.509-1.873 1.297L8.307 8H3.414c-.811 0-1.537.484-1.848 1.234-.311.75-.14 1.606.434 2.18.031.031.063.06.099.086l3.795 2.911-1.103 5.304A1.965 1.965 0 005.68 21.9c.331.205.695.307 1.057.307.461 0 .918-.165 1.296-.489l3.968-3.4 3.967 3.399c.676.58 1.601.65 2.354.184.756-.467 1.104-1.324.898-2.147l-1.111-5.342 3.794-2.911a1 1 0 00.099-.086 2.001 2.001 0 00.432-2.181zm-6.042 3.973a1 1 0 00-.371.997l1.248 5.994-4.619-3.958a.997.997 0 00-1.3 0l-4.61 3.921 1.239-5.957a1 1 0 00-.371-.997L3.429 10H9c.417 0 .79-.259.937-.648l2.06-5.514.004.01v.001l2.063 5.503A1 1 0 0015 10h5.571l-4.179 3.207z"></path></svg></button>
                </div>
            </div>


            <div class="benvenuto">
                <p>Trova l’auto dei tuoi sogni con AutoScout24, il più grande sito internet di annunci auto in Europa!</p>
                <span>
                    Un caloroso benvenuto su AutoScout24, la più grande piattaforma online in Europa per il mercato auto! <br><br>
                    Visualizza le offerte del rivenditore di auto vicino a casa, insieme a quelle di altri 43.000 rivenditori in tutta Europa. Il parco auto virtuale di AutoScout24 è enorme, tra più di 1,5 milioni di veicoli, troverai senz’altro quello che potrebbe diventare il tuo prossimo acquisto. Che si tratti di auto usate o nuove, auto eco-sostenibili o potenti vetture sportive, grazie ad AutoScout24, troverai velocemente l’auto dei tuoi desideri a prezzi convenienti. <br><br>
                    Nel nostro mercato on-line di autoveicoli puoi trovare auto usate o nuove in pochi clic, proprio con le caratteristiche che cercavi e sempre con un contatto diretto con venditori o concessionari. Il nostro motto è: sei tu a decidere quello che trovi! Il dove e il come cercare, sei sempre tu a stabilirlo, grazie ai criteri di ricerca che andrai a impostare, come la marca preferita, il modello, il tipo di carburante, il colore, gli interni, naturalmente il prezzo e tanto altro. <br><br>
                    Da oltre 20 anni AutoScout24 mette a tua disposizione la propria conoscenza in fatto di auto. <br><br>
                    Qualsiasi sia la tua richiesta, da noi trovi la risposta: vetture moderne o d’epoca, utilitarie o berline di lusso, auto sportive, auto elettriche o ibride, moto o veicoli a 3 ruote, e molto altro ancora. Ti basterà dare un’occhiata al nostro magazine, alla nostra guida o alle schede delle auto. <br><br>
                    Nel caso in cui non cerchi solamente l’auto dei tuoi sogni, ma anche la modalità ottimale di finanziamento, con la vasta gamma di servizi offerta da AutoScout24, sarai in grado di trovare formule personalizzate e tagliate sulle tue esigenze, per prestiti e leasing, senza stress e con uno sguardo d’insieme su tutti i dettagli più importanti.
                </span>
            </div>
        </section>


        <footer class="footer">
            <div class="footer_notes">
                <sup>1</sup> IVA deducibile
                <br><sup>2</sup> I dati di consumi ed emissioni per le auto usate si intendono riferiti al ciclo NEDC. Per le auto nuove, a partire dal 16.2.2021, iI rivenditore deve indicare i valori relativi al consumo di carburante ed emissione di CO2 misurati con il ciclo WLTP. Il rivenditore deve rendere disponibile nel punto vendita una guida gratuita su risparmio di carburante e emissioni di CO2 dei nuovi modelli di autovetture. Anche stile di guida e altri fattori non tecnici influiscono su consumo di carburante e emissioni di CO2. Il CO2 è il gas a effetto serra principalmente responsabile del riscaldamento terrestre.
                <br><sup>3</sup> Prezzo finale offerto al pubblico, comprensivo di IVA, non vincolato all’acquisto di un finanziamento, a permuta o rottamazione. Passaggio di proprietà e IPT esclusi.
            </div>

            <div id="torna_su">
                <a href="#" >Torna su <img src="rowUp.svg" alt="" srcset=""></a>
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

