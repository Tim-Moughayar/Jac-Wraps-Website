<!DOCTYPE html>
<html lang="en">
    <head>	
        <title>Contact - Jac Wraps</title>
        <meta name="description" content="">
        <!--
            Timothy El Moughayar
            Web 150, Final Project
            11/29/2023

            Resources:
            https://stackoverflow.com/questions/18462603/fixed-header-is-not-fixed-to-top-of-the-page
            https://www.w3schools.com/css/css3_borders.asp
            https://govisually.com/blog/ui-and-ux-design/
            https://www.w3schools.com/tags/tag_button.asp
            https://www.youtube.com/watch?v=HbBMp6yUXO0
            https://www.youtube.com/watch?v=PwWHL3RyQgk
            https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_flexible_box_layout/Aligning_items_in_a_flex_container
        -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="jac_wraps.css">
        <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon"> 
    </head>

    <body id="wrapper">
        <header class="primary-header flex">
            <div>
                <img src="media/jacwraps_logo.jpg" class="logo" alt="Jac Wraps Logo">
            </div>
                <nav>
                    <ul class="primary-nav flex">
                        <li><a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/home.html">Home</a></li>
                        <li><a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/services.html">Services</a></li>
                        <li><a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/contact.html">Contact</a></li>
                        <li><a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/about.html">About</a></li>
                    </ul>
                </nav>
        </header>
        <main>
            <section class="pageTitleAndNav">
                <div class="breadcrumbNav flex"> 
                    <a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/home.html">Home</a>
                    <label>></label>
                    <a>Contact</a>
                </div>
                <div>
                    <h1 class="sectionTitle pageTitle">Contact</h1>
                </div>
            </section>
            <section class="infoSection">
                <div class="infoSectionBackground flex">
                    <div class="flex column" id="phone">
                        <h3>Phone:</h3>
                        <label>(773) 203-6780</label>
                    </div>
                    <div class="flex column" id="location">
                        <h3>Location:</h3>
                        <label>7034 N Milwaukee Ave. <br>Niles, IL 60714</label>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.564907064551!2d-87.80273302390866!3d42.00961237122764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fc97ddaa64117%3A0xc9b4b4c2aa7a2c5!2sJac%20Wraps!5e0!3m2!1sen!2sus!4v1701316901643!5m2!1sen!2sus" 
                    width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <section class="formSection" id="confirmation">
                <h1>Contact us for a free estimate:</h1>
                <div class="formBackground whiteText">

                    <h1>Information Confirmation</h1>

                    <div>
                        <h3 class="formBlue">Everything look right?</h3>
                        
                        <table id="formInfoTable">
                            <?php
                                $table_headers = array("FirstName","LastName","Phone","Email","Comments");
                                // if (count($_POST["Services"]) > 0) {
                                //     $_POST["Services"] = implode(", ", $_POST["Services"]);
                                // }

                                foreach ($table_headers as $h => $header) {
                                    $prnt_header = $header . ":";
                                    echo "<tr>
                                                <th>$prnt_header</th>
                                                <td>$_POST[$header]<td>
                                            </tr>";
                                }
                            ?>
                        </table>
                    </div>
                    <form id="formInfoPage" action="contact_confirm.php" method="POST">
                        <a href="https://tim-moughayar.github.io/Jac-Wraps-Website/web_pages/contact.html">
                            <button type="button"  id="submitButton" class="formButton">Submit</button>
                        </a>
                    </form>
                </div> 
            </section>
        </main>
        <footer class="flex">
            <div class="flex">
                <label>
                    Resources:
                </label>
                <a href="https://www.google.com/url?q=https%3A%2F%2Fwww.3m.com%2F3M%2Fen_US%2Frestyling-studio-us%2F&sa=D&sntz=1&usg=AOvVaw3KOup4oAvNyhvGfzATrLZl" target="_blank">3M Restyling Studio</a>
                <a href="https://graphics.averydennison.com/content/dam/averydennison/graphics/na/en/documents/sell-sheets-and-brochures/color-guide/na-swf-color-card-en.pdf" target="_blank">Avery Wrapping Film</a>
            </div>
            <div class="flex">
                <label>
                    Contact:
                </label>
                <p>7034 N Milwaukee Ave.<br>
                    Niles, IL 60714</p>
                <p>
                    (773) 203-6780
                </p>            
            </div>
        </footer>
    </body>
</html>
