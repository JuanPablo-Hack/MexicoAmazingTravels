<?php
function seleccionarIntinerario($paquete)
{
    switch ($paquete) {
        case 'basico':
            echo '
                <section>
                    <h1>Intenerario</h1>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <th>Día 1</th>
                                <th>Día 2</th>
                                <th>Día 3</th>
                                <th>Día 4</th>
                                <th>Día 5</th>
                                <th>Día 6</th>
                                <th>Día 7</th>
                            </thead>
                        </table>
                    </div>
                    <div class="tbl-content">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Recepción</li>
                                            <li>Comida de bienvenida</li>
                                            <li>Tour por el Centro Histórico</li>
                                            <li>Mercado de la Ciudad</li>
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
                        <h1>Intenerario</h1>
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <th>Día 1</th>
                                    <th>Día 2</th>
                                    <th>Día 3</th>
                                    <th>Día 4</th>
                                    <th>Día 5</th>
                                    <th>Día 6</th>
                                    <th>Día 7</th>
                                    <th>Día 8</th>
                                    <th>Día 9</th>
                                    <th>Día 10</th>
                                </thead>
                            </table>
                        </div>
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <ol>
                                                <li>Recepción</li>
                                                <li>Comida de bienvenida</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Tour por el Centro Histórico</li>
                                                <li>Mercado de la Ciudad</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Monte Albán</li>
                                                <li>Elaboración de Alebrijes</li>
                                                <li>Artesanías de Barro Negro</li>
                                                <li>Templo inconcluso de Cuilapam</li>
                                                <li>Fábrica de Mezcal Ancestral</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Sitio del Árbol del Tule</li>
                                                <li>Tapetes de Lana</li>
                                                <li>Velas de Concha</li>
                                                <li>Sitio Arqueológico de Mitla</li>
                                                <li>Cascadas Pétreas de Hierve el Agua</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Mirador de Cristal</li>
                                                <li>Guelatao</li>
                                                <li>Ixtepeji</li>
                                                <li>Fabricación de Molinillos</li>
                                                <li>Chocolate Artesanal</li>
                                                <li>Tirolesa</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Libre</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Peñas Gemelas</li>
                                                <li>Pïnturas Rupestres</li>
                                                <li>Grutas</li>
                                                <li>Cascadas</li>
                                                <li>Laguna Azul</li>
                                            </ol>
                                        </td>
                                        <td>
                                            <ol>
                                                <li>Despedida</li>
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
                            <h1>Intenerario</h1>
                            <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <th>Día 1</th>
                                        <th>Día 2</th>
                                        <th>Día 3</th>
                                        <th>Día 4</th>
                                        <th>Día 5</th>
                                        <th>Día 6</th>
                                        <th>Día 7</th>
                                        <th>Día 8</th>
                                        <th>Día 9</th>
                                        <th>Día 10</th>
                                    </thead>
                                </table>
                            </div>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ol>
                                                    <li>Recepción</li>
                                                    <li>Comida de bienvenida</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Tour por el Centro Histórico</li>
                                                    <li>Mercado de la Ciudad</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Monte Albán</li>
                                                    <li>Elaboración de Alebrijes</li>
                                                    <li>Artesanías de Barro Negro</li>
                                                    <li>Templo inconcluso de Cuilapam</li>
                                                    <li>Fábrica de Mezcal Ancestral</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Sitio del Árbol del Tule</li>
                                                    <li>Tapetes de Lana</li>
                                                    <li>Velas de Concha</li>
                                                    <li>Sitio Arqueológico de Mitla</li>
                                                    <li>Cascadas Pétreas de Hierve el Agua</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Mirador de Cristal</li>
                                                    <li>Guelatao</li>
                                                    <li>Ixtepeji</li>
                                                    <li>Fabricación de Molinillos</li>
                                                    <li>Chocolate Artesanal</li>
                                                    <li>Tirolesa</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Libre</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Peñas Gemelas</li>
                                                    <li>Pïnturas Rupestres</li>
                                                    <li>Grutas</li>
                                                    <li>Cascadas</li>
                                                    <li>Laguna Azul</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ol>
                                                    <li>Despedida</li>
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
                                <h1>Intenerario</h1>
                                <div class="tbl-header">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <th>Día 1</th>
                                            <th>Día 2</th>
                                            <th>Día 3</th>
                                            <th>Día 4</th>
                                            <th>Día 5</th>
                                            <th>Día 6</th>
                                            <th>Día 7</th>
                                            <th>Día 8</th>
                                            <th>Día 9</th>
                                            <th>Día 10</th>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tbl-content">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ol>
                                                        <li>Recepción</li>
                                                        <li>Comida de bienvenida</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Tour de cultura a elección</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Mirador de Cristal</li>
                                                        <li>Guelatao</li>
                                                        <li>Ixtepeji</li>
                                                        <li>Fabricación de Molinillos</li>
                                                        <li>Chocolate Artesanal</li>
                                                        <li>Tirolesa</li>
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
                                                        <li>Puentes Colgantes</li>
                                                        <li>Péndulos</li>
                                                        <li>Tirolesas</li>
                                                        <li>Hongos Alucinógenos</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Libre</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Senderismo</li>
                                                        <li>Peñas Gemelas</li>
                                                        <li>Pinturas Rupestres</li>
                                                        <li>Grutas</li>
                                                        <li>Cascadas</li>
                                                        <li>Laguna Azul</li>
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
                                                        <li>Tirolesas</li>
                                                        <li>Puente Colgante</li>
                                                        <li>Senderismo</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Despedida</li>
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
                                    <h1>Intenerario</h1>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <th>Día 1</th>
                                                <th>Día 2</th>
                                                <th>Día 3</th>
                                                <th>Día 4</th>
                                                <th>Día 5</th>
                                                <th>Día 6</th>
                                                <th>Día 7</th>
                                                <th>Día 8</th>
                                                <th>Día 9</th>
                                                <th>Día 10</th>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tbl-content">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <ol>
                                                            <li>Recepción</li>
                                                            <li>Comida de bienvenida</li>
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
                                                            <li>Despedida</li>
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
