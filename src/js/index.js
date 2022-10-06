$(document).ready(function(){
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('#telInput').mask(SPMaskBehavior, spOptions);
    $('#cepInput').mask('00000-000');

    $('input[id*="currOcupInput"]').on('click', function() {
        let endDateInput = $(this).closest('input');
        console.log(endDateInput);

        if ($(this).is(':checked')) {
            $(endDateInput).val('');
            $(endDateInput).prop('disabled', true);
        } else {
            $(endDateInput).prop('disabled', false);
        }
    });

    let expElemIds = 1;

    $('#btnAddExp').click(function() {
        let newExpSec = `
            <section class="professionalInfoSection">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="occupationInput${expElemIds}" class="form-label">Cargo:</label>
                        <input type="text" class="form-control" name="ocupacao[${expElemIds}][cargo]" id="occupationInput${expElemIds}">
                    </div>
                    <div class="col-6">
                        <label for="companyInput${expElemIds}" class="form-label">Empresa:</label>
                        <input type="text" class="form-control" name="ocupacao[${expElemIds}][empresa]" id="companyInput${expElemIds}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="startDateInput${expElemIds}" class="form-label">Data Inicial:</label>
                        <input type="date" class="form-control" name="ocupacao[${expElemIds}][data_inicial]" id="startDateInput${expElemIds}">
                    </div>
                    <div class="col-6">
                        <label for="endDateInput${expElemIds}" class="form-label">Data Final:</label>
                        <input type="date" class="form-control" name="ocupacao[${expElemIds}][data_final]" id="endDateInput${expElemIds}">
                    </div>
                </div>
                <div class="row mb-3 ms-2">
                    <div class="col-12 form-check">
                        <input type="checkbox" class="form-check-input" value="" id="currOcupInput${expElemIds}" name="ocupacao[${expElemIds}][cargoatual]">
                        <label for="currOcupInput${expElemIds}" class="form-check-label">Este é meu cargo atual</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="attrInput${expElemIds}" class="form-label">Atribuições:</label>
                        <textarea class="form-control" name="ocupacao[${expElemIds}][atribuicoes]" id="attrInput${expElemIds}" rows="3" placeholder="..."></textarea>
                    </div>
                </div>
            </section>
        `;

        $(newExpSec).insertAfter('.professionalInfoSection:last');
        
        expElemIds += 1;
    });

    let acadElemIds = 1;

    $('#btnAddExpAcad').click(function() {
        let newAcadSec = `
            <section class="academicInfoSection">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="gradInput${acadElemIds}" class="form-label">Graduação:</label>
                        <input type="text" class="form-control" name="graduacao[${acadElemIds}][nome]" id="gradInput${acadElemIds}">
                    </div>
                    <div class="col-6">
                        <label for="uniInput${acadElemIds}" class="form-label">Instituição:</label>
                        <input type="text" class="form-control" name="graduacao[${acadElemIds}][instituicao]" id="uniInput${acadElemIds}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="levelInput${acadElemIds}" class="form-label">Nível:</label>
                        <select class="form-select" name="graduacao[${acadElemIds}][nivel]" id="levelInput${acadElemIds}">
                            <option selected value="1">Selecione...</option>
                            <option value="2">Fundamental</option>
                            <option value="3">Médio</option>
                            <option value="4">Superior</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="startGradDateInput${acadElemIds}" class="form-label">Data Inicial:</label>
                        <input type="date" class="form-control" name="graduacao[${acadElemIds}][data_inicial]" id="startGradDateInput${acadElemIds}">
                    </div>
                    <div class="col-4">
                        <label for="endGradDateInput${acadElemIds}" class="form-label">Data Final:</label>
                        <input type="date" class="form-control" name="graduacao[${acadElemIds}][data_final]" id="endGradDateInput${acadElemIds}">
                    </div>
                </div>
            </section>
        `;

        $(newAcadSec).insertAfter('.academicInfoSection:last');
        
        acadElemIds += 1;
    });

});
