/* 
 * Glauco Roberto Munsberg dos Santos
 * 
 * Este é o arquivo que contém todas as funções básicas
 *  necessárias para o funcionamento do sistema peopleGrid 
 * 
 */


/**
 * creatrGrid é o comando cria uma grid
 *  na dimensao sizeXsize, tal que ela 
 *  estará vinculada na div cont
 * @param {type} size
 * @param {type} nomePai
 * @returns {undefined}
 */
function createGrid(name,size,nomePai,rate) {
    var ratioW = size,
        ratioH = size, cont = 0;
    var parent = $('<div />', {
        class: 'grid',
        id: name,
        width: (ratioW / rate)  * size,
        height: (ratioH / rate)  * size
    }).addClass('grid').appendTo('.'+nomePai);

    for (var i = 0; i < ratioH; i++) {
        for(var p = 0; p < ratioW; p++){
            $('<div />', {
                id: cont,
                width: (ratioW / rate) - 1,
                height: (ratioH / rate) -1
            }).appendTo(parent);
            cont++;
        }
    }
}
