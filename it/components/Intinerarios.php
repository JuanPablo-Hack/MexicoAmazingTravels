<?php
function seleccionarIntinerario($paquete)
{
    switch ($paquete) {
        case 'basico':
            echo '
                <section>
                    <h1>Itinerario</h1>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <th>Giorno 1</th>
                                <th>Giorno 2</th>
                                <th>Giorno 3</th>
                                <th>Giorno 4</th>
                                <th>Giorno 5</th>
                                <th>Giorno 6</th>
                                <th>Giorno 7</th>
                            </thead>
                        </table>
                    </div>
                    <div class="tbl-content">
                        <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <ol>
                                        <li>Reception</li>
                                        <li>Welcome meal</li>
                                        <li>Tour of the Historic Center</li>
                                        <li>City Market</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Monte Albán</li>
                                        <li>Elaboration of Alebrijes</li>
                                        <li>Black Clay Crafts</li>
                                        <li>Unfinished temple of Cuilapam</li>
                                        <li>Ancestral Mezcal Factory</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Site of the Tule Tree</li>
                                        <li>Wool rugs</li>
                                        <li>Shell candles</li>
                                        <li>Mitla Archaeological Site</li>
                                        <li>Waterfalls Pétreas de Hierve el Agua</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Crystal gazebo</li>
                                        <li>Guelatao</li>
                                        <li>Ixtepeji</li>
                                        <li>Manufacture of grinders</li>
                                        <li>Artisan chocolate</li>
                                        <li>zip line</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Grottoes of San Sebastian</li>
                                        <li>Underground rivers</li>
                                        <li>Cenote</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Peñas Gemelas</li>
                                        <li>Paintings</li>
                                        <li>Caves</li>
                                        <li>Waterfalls</li>
                                        <li>Blue Lagoon</li>
                                    </ol>
                                </td>
                                <td>
                                    <ol>
                                        <li>Farewell</li>
                                        <li>Meal</li>
                                        <li>Folk Event</li>
                                    </ol>
                                </td>
                                
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </section>';
            break;
        case 'familiar':
            echo '
                    <section>
                        <h1>Itinerario</h1>
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <th>Giorno 1</th>
                                    <th>Giorno 2</th>
                                    <th>Giorno 3</th>
                                    <th>Giorno 4</th>
                                    <th>Giorno 5</th>
                                    <th>Giorno 6</th>
                                    <th>Giorno 7</th>
                                    <th>Giorno 8</th>
                                    <th>Giorno 9</th>
                                    <th>Giorno 10</th>
                                </thead>
                            </table>
                        </div>
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <ol>
                                                <li>Ricezione</li>
                                                <li>Pasto di benvenuto</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Tour del Centro Storico</li>
                                                <li>Mercato cittadino</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Monte Albán</li>
                                                <li>Elaborazione di Alebrijes</li>
                                                <li>Artigianato in argilla nera</li>
                                                <li>Tempio incompiuto di Cuilapam</li>
                                                <li>Fabbrica ancestrale di Mezcal</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Gratuito</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Sito dell albero di Tule</li>
                                                <li>Tappeti di lana</li>
                                                <li>Candele a conchiglia</li>
                                                <li>Sito archeologico di Mitla</li>
                                                <li>Cascate di pietra di Hierve el Agua</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Gratuito</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Gazebo in cristallo</li>
                                                <li>Guelatao</li>
                                                <li>Ixtepeji</li>
                                                <li>Fabbricazione di macinini</li>
                                                <li>Cioccolato artigianale</li>
                                                <li>Teleferica</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Gratuito</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Peñas Gemelas</li>
                                                <li>Dipinti</li>
                                                <li>Grutas</li>
                                                <li>Cascate</li>
                                                <li>Laguna Blu</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Addio</li>
                                            </ol>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>';
            break;
        case 'retirados':
            echo '
                        <section>
                            <h1>Itinerario</h1>
                            <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <th>Giorno 1</th>
                                        <th>Giorno 2</th>
                                        <th>Giorno 3</th>
                                        <th>Giorno 4</th>
                                        <th>Giorno 5</th>
                                        <th>Giorno 6</th>
                                        <th>Giorno 7</th>
                                        <th>Giorno 8</th>
                                        <th>Giorno 9</th>
                                        <th>Giorno 10</th>
                                    </thead>
                                </table>
                            </div>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Ricezione</li>
                                                    <li>Pasto di benvenuto</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Tour del Centro Storico</li>
                                                    <li>Mercato cittadino</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Monte Albán</li>
                                                    <li>Elaborazione di Alebrijes</li>
                                                    <li>Artigianato in argilla nera</li>
                                                    <li>Tempio incompiuto di Cuilapam</li>
                                                    <li>Fabbrica ancestrale di Mezcal</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Gratuito</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Sito dell albero di Tule</li>
                                                    <li>tappeti di lana</li>
                                                    <li>Candele a conchiglia</li>
                                                    <li>Sito archeologico di Mitla</li>
                                                    <li>Cascate di pietra di Hierve el Agua</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Gratuito</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Gazebo in cristallo</li>
                                                    <li>Guelatao</li>
                                                    <li>Ixtepeji</li>
                                                    <li>Fabbricazione di macinini</li>
                                                    <li>Cioccolato artigianale</li>
                                                    <li>Teleferica</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Gratuito</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Peñas Gemelas</li>
                                                    <li>Pïnturas Rupestres</li>
                                                    <li>Grutas</li>
                                                    <li>Cascate</li>
                                                    <li>Laguna Blu</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Addio</li>
                                                </ol>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>';
            break;
        case 'aventura':
            echo '
                            <section>
                                <h1>Itinerario</h1>
                                <div class="tbl-header">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <th>Giorno 1</th>
                                            <th>Giorno 2</th>
                                            <th>Giorno 3</th>
                                            <th>Giorno 4</th>
                                            <th>Giorno 5</th>
                                            <th>Giorno 6</th>
                                            <th>Giorno 7</th>
                                            <th>Giorno 8</th>
                                            <th>Giorno 9</th>
                                            <th>Giorno 10</th>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tbl-content">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ol>
                                                        <li>Ricezione</li>
                                                        <li>Pasto di benvenuto</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Tour de cultura a elección</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Gazebo in cristallo</li>
                                                        <li>Guelatao</li>
                                                        <li>Ixtepeji</li>
                                                        <li>Fabbricazione di macinini</li>
                                                        <li>Cioccolato artigianale</li>
                                                        <li>Teleferica</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Gratuito</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Miradores</li>
                                                        <li>Puentes Colgantes</li>
                                                        <li>Péndulos</li>
                                                        <li>Telefericas</li>
                                                        <li>Hongos Alucinógenos</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Gratuito</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Senderismo</li>
                                                        <li>Peñas Gemelas</li>
                                                        <li>Pinturas Rupestres</li>
                                                        <li>Grutas</li>
                                                        <li>Cascate</li>
                                                        <li>Laguna Blu</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Gratuito</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Cuajimoloyas</li>
                                                        <li>Benito Juárez</li>
                                                        <li>Cañón del Coyote</li>
                                                        <li>Telefericas</li>
                                                        <li>Puente Colgante</li>
                                                        <li>Senderismo</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Addio</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>';
            break;
        case 'playas':
            echo '
                                <section>
                                    <h1>Itinerario</h1>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <th>Giorno 1</th>
                                                <th>Giorno 2</th>
                                                <th>Giorno 3</th>
                                                <th>Giorno 4</th>
                                                <th>Giorno 5</th>
                                                <th>Giorno 6</th>
                                                <th>Giorno 7</th>
                                                <th>Giorno 8</th>
                                                <th>Giorno 9</th>
                                                <th>Giorno 10</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tbl-content">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <ol>
                                                            <li>Ricezione</li>
                                                            <li>Pasto di benvenuto</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Transportación</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Bahías de Huatulco</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Puerto Escondido</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Zipolite</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Mazunte</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Punta Cometa</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Chahue</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Chacahua</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Addio</li>
                                                        </ol>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>';
            break;
    }
}
