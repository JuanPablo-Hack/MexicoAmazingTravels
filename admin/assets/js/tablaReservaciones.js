function fnFormatDetails(oTable, nTr) {
    var aData = oTable.fnGetData(nTr);
    var sOut =
        '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
    sOut += "<tr><td>Fecha del pedido:</td><td>" + aData[11] + "</td><td>Pais:</td><td>" + aData[12] + "</td><td>Ciudad</td><td>" + aData[13] + "</td></tr>";
    sOut += "<tr><td>Fechas seleccionadas:</td><td>" + aData[10] + "</td><td>Estado de la reserva:</td><td>" + aData[14] + "</td><td>Total a pagar:</td><td>" + aData[5] + "</td></tr>";
    sOut += "<tr><td>Destino:</td><td>" + aData[8] + "</td><td>Paquete:</td><td>" + aData[9] + "</td></tr>";
    sOut += "<tr><td>No. Adultos:</td><td>" + aData[6] + "</td><td>No. Niños:</td><td>" + aData[7] + "</td></tr>";
    sOut += "</table>";

    return sOut;
}
$(document).ready(function () {
    var nCloneTh = document.createElement("th");
    var nCloneTd = document.createElement("td");
    nCloneTd.innerHTML = '<img src="assets/img/details_open.png">';
    nCloneTd.className = "center";

    $("#hidden-table-info thead tr").each(function () {
        this.insertBefore(nCloneTh, this.childNodes[0]);
    });

    $("#hidden-table-info tbody tr").each(function () {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
    });

    var oTable = $("#hidden-table-info").dataTable({
        aoColumnDefs: [
            {
                bSortable: false,
                aTargets: [0],
            },
        ],
        dom: "Bfrtip",
        buttons: ["csv", "excel", "pdf"],
    });

    $("#hidden-table-info tbody td img").on("click", function () {
        var nTr = $(this).parents("tr")[0];
        if (oTable.fnIsOpen(nTr)) {
            this.src = "assets/img/details_open.png";
            oTable.fnClose(nTr);
        } else {
            this.src = "assets/img/details_close.png";
            oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), "details");
        }
    });
});