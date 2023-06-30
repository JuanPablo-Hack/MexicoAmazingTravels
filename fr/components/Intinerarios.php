<?php
function seleccionarIntinerario($paquete)
{
    switch ($paquete) {
            // TODO: Traducir esta parte en francés
        case 'basico':
            echo '
                <section>
                    <h1>ITINÉRAIRE</h1>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <th>Jour 1</th>
                                <th>Jour 2</th>
                                <th>Jour 3</th>
                                <th>Jour 4</th>
                                <th>Jour 5</th>
                                <th>Jour 6</th>
                                <th>Jour 7</th>
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
                        <h1>ITINÉRAIRE</h1>
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <th>Jour 1</th>
                                    <th>Jour 2</th>
                                    <th>Jour 3</th>
                                    <th>Jour 4</th>
                                    <th>Jour 5</th>
                                    <th>Jour 6</th>
                                    <th>Jour 7</th>
                                    <th>Jour 8</th>
                                    <th>Jour 9</th>
                                    <th>Jour 10</th>
                                </thead>
                            </table>
                        </div>
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <ol>
                                                <li>Réception</li>
                                                <li>Repas de bienvenue</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Visite du centre historique</li>
                                                <li>Marché de la ville</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Monte Albán</li>
                                                <li>Élaboration dAlebrijes</li>
                                                <li>Artisanat dargile noire</li>
                                                <li>TTemple inachevé de Cuilapam</li>
                                                <li>Usine ancestrale de mezcal</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Site de lArbre de Tule</li>
                                                <li>tapis en laine</li>
                                                <li>bougies coquillages</li>
                                                <li>Site archéologique de Mitla</li>
                                                <li>Cascades de pierre de Hierve el Agua</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>belvédère en cristal</li>
                                                <li>Guelatao</li>
                                                <li>Ixtepeji</li>
                                                <li>Fabrication de broyeurs</li>
                                                <li>Chocolat artisanal</li>
                                                <li>tyrolienne</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Clubs jumeaux</li>
                                                <li>Peintures rupestres</li>
                                                <li>grottes</li>
                                                <li>cascades</li>
                                                <li>lagon bleu</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Adieu</li>
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
                            <h1>ITINÉRAIRE</h1>
                            <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <th>Jour 1</th>
                                        <th>Jour 2</th>
                                        <th>Jour 3</th>
                                        <th>Jour 4</th>
                                        <th>Jour 5</th>
                                        <th>Jour 6</th>
                                        <th>Jour 7</th>
                                        <th>Jour 8</th>
                                        <th>Jour 9</th>
                                        <th>Jour 10</th>
                                    </thead>
                                </table>
                            </div>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Réception</li>
                                                    <li>Repas de bienvenue</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Visite du centre historique</li>
                                                    <li>Marché de la ville</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Monte Albán</li>
                                                    <li>Élaboration dAlebrijes</li>
                                                    <li>Artisanat dargile noire</li>
                                                    <li>TTemple inachevé de Cuilapam</li>
                                                    <li>Usine ancestrale de mezcal</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Site de lArbre de Tule</li>
                                                    <li>tapis en laine</li>
                                                    <li>bougies coquillages</li>
                                                    <li>Site archéologique de Mitla</li>
                                                    <li>Cascades de pierre de Hierve el Agua</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>belvédère en cristal</li>
                                                    <li>Guelatao</li>
                                                    <li>Ixtepeji</li>
                                                    <li>Fabrication de broyeurs</li>
                                                    <li>Chocolat artisanal</li>
                                                    <li>tyrolienne</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Clubs jumeaux</li>
                                                    <li>Peintures rupestres</li>
                                                    <li>grottes</li>
                                                    <li>cascades</li>
                                                    <li>lagon bleu</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Adieu</li>
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
                                <h1>ITINÉRAIRE</h1>
                                <div class="tbl-header">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <th>Jour 1</th>
                                            <th>Jour 2</th>
                                            <th>Jour 3</th>
                                            <th>Jour 4</th>
                                            <th>Jour 5</th>
                                            <th>Jour 6</th>
                                            <th>Jour 7</th>
                                            <th>Jour 8</th>
                                            <th>Jour 9</th>
                                            <th>Jour 10</th>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tbl-content">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ol>
                                                        <li>Réception</li>
                                                        <li>Repas de bienvenue</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Tour de cultura a elección</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>belvédère en cristal</li>
                                                        <li>Guelatao</li>
                                                        <li>Ixtepeji</li>
                                                        <li>Fabrication de broyeurs</li>
                                                        <li>Chocolat artisanal</li>
                                                        <li>tyrolienne</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Libre</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Miradores</li>
                                                        <li>Ponts suspendus</li>
                                                        <li>pendules</li>
                                                        <li>tyroliennes</li>
                                                        <li>champignons hallucinogènes</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Libre</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Randonnée</li>
                                                        <li>Clubs jumeaux</li>
                                                        <li>Peintures rupestres</li>
                                                        <li>grottes</li>
                                                        <li>cascades</li>
                                                        <li>lagon bleu</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Libre</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Cuajimoloyas</li>
                                                        <li>Benito Juárez</li>
                                                        <li>Cañón del Coyote</li>
                                                        <li>tyroliennes</li>
                                                        <li>Puente Colgante</li>
                                                        <li>Randonnée</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Adieu</li>
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
                                    <h1>ITINÉRAIRE</h1>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <th>Jour 1</th>
                                                <th>Jour 2</th>
                                                <th>Jour 3</th>
                                                <th>Jour 4</th>
                                                <th>Jour 5</th>
                                                <th>Jour 6</th>
                                                <th>Jour 7</th>
                                                <th>Jour 8</th>
                                                <th>Jour 9</th>
                                                <th>Jour 10</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tbl-content">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <ol>
                                                            <li>Réception</li>
                                                            <li>Repas de bienvenue</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Transport</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Baies de Huatulco</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>port caché</li>
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
                                                            <li>Adieu</li>
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
