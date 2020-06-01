var htmlcontent =
                
                '<table class="w-100">' + 
                    '<thead>' +
                        '<hr>' +
                        '<tr>' +
                            '<th colspan="2" class="text-left">Format didukung</th>' +
                        '</tr>' +
                    '</thead>' +
                    '<tbody>' +
                        '<tr>' +
                            '<td colspan="2" class="text-left"><br></td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td class="vertical-align: middle;" rowspan="2"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" svg-inline="" role="presentation" focusable="false" tabindex="-1" class="flex-0 mr10"><path d="M26.183 0H5.818A5.819 5.819 0 000 5.818v20.364A5.819 5.819 0 005.818 32h20.365A5.819 5.819 0 0032 26.182V5.818A5.819 5.819 0 0026.183 0zm-1.455 4.364a2.91 2.91 0 110 5.818 2.91 2.91 0 010-5.818zM2.909 26.182l10.182-14.546 5.862 8.376L21.82 16l7.273 10.182H2.909z" fill="#000" fill-opacity=".2"></path></svg></td>' +
                            '<td class="text-left">Satu gambar beresolusi tinggi</td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td class="text-left">PNG,JPG,GIF + Cropping</td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td colspan="2" class="text-left"><br></td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td class="vertical-align: middle;" rowspan="2"><svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg" svg-inline="" role="presentation" focusable="false" tabindex="-1" class="flex-0 mr10"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.2A3.2 3.2 0 013.2 0h25.6A3.2 3.2 0 0132 3.2v16a3.2 3.2 0 01-3.2 3.2H3.2A3.2 3.2 0 010 19.2v-16zm9.098 13.6c1.318 0 2.462-.507 3.1-1.693h.043l.203 1.447h1.71v-5.76H9.648v1.838h2.172v.044c-.014 1.085-.927 2.112-2.448 2.112-1.767 0-2.867-1.505-2.867-3.574 0-2.026.927-3.574 2.838-3.574 1.232 0 1.912.666 2.173 1.462h2.462C13.59 7.047 11.995 5.6 9.272 5.6c-1.42 0-2.535.42-3.404 1.157C4.666 7.77 4 9.377 4 11.214c0 1.65.492 3.068 1.434 4.08.883.941 2.129 1.505 3.664 1.505zm6.68-.246h2.477V5.788h-2.477v10.766zm11.324-6.324v2.011h-4.548v4.313h-2.462V5.788H28v2.098h-5.446v2.344h4.548z" fill="#000" fill-opacity=".2"></path></svg></td>' +
                            '<td class="text-left">Animated GIF</td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td class="text-left">400x300, 800x600, 1600x1200</td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td colspan="2" class="text-left"><br></td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td colspan="2" class="text-left"><hr></td>' +
                        '</tr>' +
                        '<tr>' +
                            '<td colspan="2" class="text-left"><span>selengkapnya di </span><span><a href="#" class="fclbrown text-decoration-none">panduan komunitas</a></span></td>' +
                        '</tr>' +
                    '</tbody>' +
                '</table>'

function help() {
    swal({
        title: "Bantuan Publikasi",
        html: htmlcontent,
        showConfirmButton: false
    })
}