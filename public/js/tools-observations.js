$(document).ready((function(){let e=$("[data-observation-qtd]").data("observationQtd")||0;$("[data-observation]").on("click",(function(o){o.preventDefault();let t=$(o.target).data("observation");if("open"===t){e++;let o=`\n        <div class="col-12 form-group px-0 d-flex flex-wrap justify-content-start" id="container_observation_${e}">\n            <div class="col-12 px-0">\n                <textarea class="form-control" id="observation_${e}" placeholder="Observação útil sobre a ferramenta ou processo de execução" name="observation_${e}" rows="2"></textarea>\n            </div>\n        </div>`;$("#observation").append(o)}"close"===t&&e>=0&&($(`#container_observation_${e}`).remove(),$(`#observation_${e}`).remove(),$(`#observation_${e}_date`).remove(),e--)}))}));
