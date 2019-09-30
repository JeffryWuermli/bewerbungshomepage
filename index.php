<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bewerbung als Informatiker</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/png" />
</head>
<body id="top">
	<header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a href="#top"><img src="images/logo_nav.png"></a>
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">            
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#anschreiben">anschreiben</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#ueber-mich">Über mich</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#faehigkeiten">Fähigkeiten</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#erfahrung">Berufliche Erfahrung</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#ausbildung">Bildung</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#referenzen">Referenzen</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div class="profile-page">
            <div class="wrapper">
                <div class="page-header page-header-small" filter-color="green">
                    <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
                    <div class="container">
                        <div class="content-center">
                            <div class="cc-profile-image"><img src="images/jeffry.jpg" alt="Image" /></div>
                            <div class="h2 title">Jeffry Thierry Würmli</div>
                            <p class="category text-white">Applikationsentwickler</p>
                            <a class="btn btn-primary btn-small" id="button-download" href="dateien/Bewerbung.pdf" target="_blank" rel="noopener">Download Anschreiben</a>
                            <a class="btn btn-primary btn-small" id="button-download" href="dateien/Lebenslauf.pdf" target="_blank" rel="noopener">Download Lebenslauf</a>
                            <a class="btn btn-primary btn-small" id="button-download" href="dateien/Zeugnisse.pdf" target="_blank" rel="noopener">Download Zeugnisse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            use PHPMailer\PHPMailer\PHPMailer;

            require 'vendor/autoload.php';

            if(isset($_SESSION['mitteilung']) && isset($_SESSION['email']) && isset($_SESSION['betreff']) && isset($_SESSION['name'])){
                
                $name = $_SESSION['name'];
                $betreff = $_SESSION['betreff'];
                $email = $_SESSION['email'];
                $mitteilung = $_SESSION['mitteilung'];

                $mail = new PHPMailer(true); 

                $mail->IsSMTP(); 
                $mail->SMTPDebug = 0; 
                $mail->SMTPAuth = true; 
                $mail->SMTPSecure = 'tls'; 
                $mail->Host = "leto.ssl.hosttech.eu";

                $mail->Port = 587; 
                $mail->IsHTML(true);
                
                $mail->Username = "bewerbungen@wuermli-jeffry.ch";
                $mail->Password = "Icecube.1994";
                
                $mail->setFrom( $email, $name);
                $mail->addAddress('bewerbungen@wuermli-jeffry.ch');
                $mail->Subject = $betreff;
                
                $mail->msgHTML($mitteilung);
                $mail->AltBody = $mitteilung;

                $mail->send();
            }
        ?>

        <div class="section" id="anschreiben">
            <div class="container">
                <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                        <div class="col-lg-11 col-md-11">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Anschreiben</div>
                                <div id="anschreiben" class="h6"><p>Bewerbung um ein Praktikum als Informatiker Fachrichtung Applikationsentwicklung</p></div>
                                <p>Sehr geehrte Damen und Herren</p>
                                <p>Die Ausbildung als Informatiker bei der Benedict-Schule habe ich im Sommer 2016 begonnen. Die
                                    ersten zwei Jahre bestehen dabei ausschliesslich aus Theorie und Praxis in der Schule. Für die Jahre
                                    drei und vier werde ich jedoch ein Praktikum absolvieren.<br>
                                    Dieses Praktikum würde ich mit Freuden in Ihrem Unternehmen bestreiten.</p>
                                    
                                <p>Mich als Teil eines jungen, dynamischen Start-ups sehen zu dürfen würde mir sehr gefallen.
                                    Sowohl die verwendeten Entwicklungstechniken, als auch das von Ihnen beschriebene eingespielte
                                    Team lassen mich darauf hoffen Ihnen eine baldige Unterstützung sein zu dürfen.</p>

                                <p>Mit meinen bis dato vorhanden Fähigkeiten, bin ich überzeugt, Ihr Unternehmen effizient
                                    unterstützen zu können. Ich meinerseits würde gerne von Ihrem Fachwissen profitieren und mein
                                    Können weiterentwickeln.</p>

                                <p>Ich verfüge bereits über ein breites Wissen, welches dank meines grossen Interessens stetig wächst.
                                    Mit meiner raschen Auffassungsgabe, meinem Biss und meiner Geduld habe ich mir während vielen
                                    spannenden Stunden ein breites Basiswissen angeeignet. Neben vorhandener Erfahrung, zählen auch
                                    Zuverlässigkeit, Flexibilität und der Umgang mit Kunden zu meinen Stärken.</p>
                                    
                                <p>In der Hoffnung mit meinen Unterlagen einen bleibenden Eindruck hinterlassen zu haben, würde ich
                                    mich auf ein persönliches Gespräch freuen.</p>
                                <br>
                                <div id="anschreiben">
                                    Freundliche Grüsse <br>
                                    <img src="images/unterschrift.png">
                                    <p>Jeffry Würmli</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="ueber-mich">
            <div class="container">
                <div class="card" data-aos="fade-up" data-aos-offset="10">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Über mich</div>
                                <p>Ich bin 25 Jahre alt und der grösste Technikfan, den ich selbst kenne. <br> Seit ich denken kann, interessiere ich mich für die Modernisierung der Technik. Kurz gesagt, der Grund wieso ich eine Informatikerausbildung
                                    mache, ist dass es mich mit Freude erfüllt Probleme zu lösen die mein Wissen, Geschick und nicht zuletzt meine Hartnäckigkeit herausfordern.</p>
                                <p>Nebst der Technik, ist mein Freundeskreis, wie auch meine Familie ein sehr wichtiger Bestandteil meines Lebens. Meine Freizeit verbringe ich gerne in Gesellschaft bei Konzerten, Anlässen, Ausgang aber auch in der
                                    Natur, wie zum Beispiel beim Snowboard/Skifahren oder Joggen. Sollte ich niemanden um mich haben, geniesse ich auch einmal einen Moment der Ruhe.</p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card-body">
                                <div class="h4 mt-0 title">Personalien</div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Vornamen:</strong></div>
                                    <div class="col-sm-8">Jeffry Thierry</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Nachname:</strong></div>
                                    <div class="col-sm-8">Würmli</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Geburtsdatum:</strong></div>
                                    <div class="col-sm-8">24.07.1994</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                    <div class="col-sm-8">bewerbungen@wuermli-jeffry.ch</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Telefon:</strong></div>
                                    <div class="col-sm-8">079 911 55 66</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Adresse:</strong></div>
                                    <div class="col-sm-8">Tempelhofstrasse 24<br> 8153 Rümlang</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-4"><strong class="text-uppercase">Heimatort:</strong></div>
                                    <div class="col-sm-8">Gommiswald</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="faehigkeiten">
            <div class="container">
                <div class="h4 text-center mb-4 title">Fähigkeiten</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Java</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        </div><span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">C++</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        </div><span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">PHP</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div><span class="progress-value">70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">JavaScript</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div><span class="progress-value">70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">HTML 5</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div><span class="progress-value">70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div><span class="progress-value">70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Bootstrap</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        </div><span class="progress-value">50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Verwendung von Web-Templates (Diese Webseite)</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                        </div><span class="progress-value">80%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Programmierung Mobile-Kernel</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        </div><span class="progress-value">50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Zusammenbau von Computer</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                        </div><span class="progress-value">95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Netzwerk einrichten</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        </div><span class="progress-value">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="progress-container progress-primary"><span class="progress-badge">Office Kentnisse</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                        </div><span class="progress-value">80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="h4 text-center mb-4 title">Portfolio (Downloads)</div>
                    </div>
                </div>
                <div class="tab-content gallery mt-5">
                    <div class="tab-pane active" id="web-development">
                        <div class="ml-auto mr-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <a href="dateien/zork2.zip" download="zork2.zip">
                                            <figure class="cc-effect"><img src="images/java.jpg" alt="Image" />
                                                <figcaption>
                                                    <div class="h4">Zork 2 (Textbasiertes Spiel)</div>
                                                    <p>Java Development</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <a href="dateien/buchhaltung.zip" download="buchhaltung.zip">
                                            <figure class="cc-effect"><img src="images/buchhaltung.jpg" alt="Image" />
                                                <figcaption>
                                                    <div class="h4">(kleine) Buchhaltungssoftware</div>
                                                    <p>Web Development</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="erfahrung">
            <div class="container cc-experience">
                <div class="h4 text-center mb-4 title">Berufliche Erfahrung</div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>Februar 2016 - Juni 2016</p>
                                <div class="h7">UPC Schweiz</div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Call-Agent inbound</div>
                                <li>1st Level administration support</li>
                                <li>2st Level administration support</li>
                                <li>Verkauf</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>September 2015 - Dezember 2015</p>
                                <div class="h7">POOL. DIRECT. GmbH</div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Medienbearter (Verkauf)</div>
                                <li>Verkauf im Aussendiesnt (Firma Sunrise)</li>
                                <li>Kundenbetreuung</li>
                                <li>Teamadministration</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>Februar 2015 - August 2015</p>
                                <div class="h7">Trendcommerce Dialog AG</div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Call-Agent outbound</div>
                                <li>Verkauf im Privatsegment (Firmen UPC Schweiz und Quickline)</li>
                                <li>Verkauf im Businesssegment (Firma UPC Schweiz)</li>
                                <li>Kundendatenpflege</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>Oktober 2014 - Januar 2015</p>
                                <div class="h7">Multi-Media-Marketing GmbH</div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Call-Agent outbound</div>
                                <li>Verkauf (Firma bofrost)</li>
                                <li>Kundendatenpflege</li>
                                <li>Kundenbetreuung</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>Jnuar 2014 - Oktober 2014</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Arbeitssuchend</div>
                                <li>Schule bei Stiftung Zukunft absolviert (Siehe Schulbildung)</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-experience-header">
                                <p>November 2012 - Januar 2014</p>
                                <div class="h7">Avocis AG</div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Call-Agent outbound</div>
                                <li>1st Level technical support</li>
                                <li>2st Level technical support</li>
                                <li>Deeskalation call backs</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="ausbildung">
            <div class="container cc-education">
                <div class="h4 text-center mb-4 title">Ausbildung</div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2016 - Heute</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Informatiker Fachrichtung Applikationsentwicklung</div>
                                <p class="category">Benedict Schule, Zürich</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2010 - 2012</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Multimediaelektroniker</div>
                                <p class="category">EP: Raisig, Kreuzlingen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="schulbildung">
            <div class="container cc-education">
                <div class="h4 text-center mb-4 title">Schulbildung</div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2014</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Englisch und Deutsch Unterricht</div>
                                <p class="category">Stiftung Zukunft (Thurgau)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2010 - 2012</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Berufsschule</div>
                                <p class="category">Gewerbliche Berufsschule St. Gallen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2007 - 2010</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Sekundarschule</div>
                                <p class="category">Volksschulgemeinde Tägerwilen (7.-9. Klasse)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body cc-education-header" id="ausbildung-links">
                                <p>2001 - 2007</p>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                            <div class="card-body">
                                <div class="h5">Primarschule</div>
                                <p class="category">Wäldi (1.-6. Klasse)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="referenzen">
            <div class="container cc-reference">
                <div class="h4 mb-4 text-center title">Referenzen</div>
                    <div class="card" data-aos="zoom-in">
                        <div class="row">                                    
                            <div class="col-lg-5 col-md-5 cc-reference-header">
                                <div class="h5 pt-2">POOL DIRECT. GmbH</div>
                                <p class="category">Herr Johannes Kauert</p>
                                <p>Pflanzschulstrasse 17<br>
                                8400 Winterthur<br>
                                076 817 81 11</p>
                            </div>
                            <div class="col-lg-7 col-md-7 cc-reference-header">
                                <div class="h5 pt-2">Trendcommerce Dialog AG</div>
                                <p class="category">Frau Melissa Hort</p>
                                <p>Heiligkreuzstrasse 2<br>
                                9008 St. Gallen<br>
                                071 555 08 00</p>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="contact">
            <div class="cc-contact-information" style="background-image: url('images/ruemlang_map.png');">
                <div class="container">
                    <div class="cc-contact">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card mb-0" data-aos="zoom-in">
                                    <div class="h4 text-center title">Kontakt</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <form id="kontaktform" action="index.php" method="POST">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                                                <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                                                <input class="form-control" type="text" name="betreff" placeholder="Betreff" required="required" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                <input class="form-control" type="email" name="email" placeholder="E-mail" required="required" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="mitteilung" placeholder="Mitteilung" required="required"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn btn-primary" type="submit">Senden</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <p class="mb-0"><strong>Adresse </strong></p>
                                                <p class="pb-2">Tempelhofstrasse 24 <br> 8153 Rümlang</p>
                                                <p class="mb-0"><strong>Telefon</strong></p>
                                                <p class="pb-2">+41 79 911 55 66</p>
                                                <p class="mb-0"><strong>Email</strong></p>
                                                <p>bewerbungen@wuermli-jeffry.ch</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="h4 title text-center">Jeffry Thierry Würmli</div>
        <div class="text-center text-muted">
            <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
        </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>