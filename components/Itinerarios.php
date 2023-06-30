<?php
// TODO: Poner toda esta parte en inglés kevin
function seleccionarIntinerario($paquete)
{
    switch ($paquete) {
        case 'basico':
            echo '
                <section>
                    <h1>Itinerary</h1>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <th>Day 1</th>
                                <th>Day 2</th>
                                <th>Day 3</th>
                                <th>Day 4</th>
                                <th>Day 5</th>
                                <th>Day 6</th>
                                <th>Day 7</th>
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
                        <h1>Itinerary</h1>
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <th>Day 1</th>
                                    <th>Day 2</th>
                                    <th>Day 3</th>
                                    <th>Day 4</th>
                                    <th>Day 5</th>
                                    <th>Day 6</th>
                                    <th>Day 7</th>
                                    <th>Day 8</th>
                                    <th>Day 9</th>
                                    <th>Day 10</th>
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
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
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
                                            <li>Free</li>
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
                                            <li>Free</li>
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
                                            <li>Free</li>
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
                            <h1>Itinerary</h1>
                            <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <th>Day 1</th>
                                        <th>Day 2</th>
                                        <th>Day 3</th>
                                        <th>Day 4</th>
                                        <th>Day 5</th>
                                        <th>Day 6</th>
                                        <th>Day 7</th>
                                        <th>Day 8</th>
                                        <th>Day 9</th>
                                        <th>Day 10</th>
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
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
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
                                                    <li>Free</li>
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
                                                    <li>Free</li>
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
                                                    <li>Free</li>
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
                                <h1>Itinerary</h1>
                                <div class="tbl-header">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <th>Day 1</th>
                                            <th>Day 2</th>
                                            <th>Day 3</th>
                                            <th>Day 4</th>
                                            <th>Day 5</th>
                                            <th>Day 6</th>
                                            <th>Day 7</th>
                                            <th>Day 8</th>
                                            <th>Day 9</th>
                                            <th>Day 10</th>
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
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Culture tour of your choice</li>
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
                                                        <li>Free</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Viewpoints</li>
                                                        <li>Hanging bridges</li>
                                                        <li>pendulums</li>
                                                        <li>zip lines</li>
                                                        <li>hallucinogenic mushrooms</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Free</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Hiking</li>
                                                        <li>Peñas Gemelas</li>
                                                        <li>Paintings</li>
                                                        <li>Caves</li>
                                                        <li>Waterfalls</li>
                                                        <li>Blue Lagoon</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Free</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Cuajimoloyas</li>
                                                        <li>Benito Juárez</li>
                                                        <li>Cañón del Coyote</li>
                                                        <li>zip lines</li>
                                                        <li>Suspension bridge</li>
                                                        <li>Hiking</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Farewell</li>
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
                                    <h1>Itinerary</h1>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <th>Day 1</th>
                                                <th>Day 2</th>
                                                <th>Day 3</th>
                                                <th>Day 4</th>
                                                <th>Day 5</th>
                                                <th>Day 6</th>
                                                <th>Day 7</th>
                                                <th>Day 8</th>
                                                <th>Day 9</th>
                                                <th>Day 10</th>
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
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Transportation</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Huatulco bays</li>
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
                                                            <li>Farewell</li>
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
