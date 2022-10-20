<?php

namespace Database\Seeders;

use App\Models\Dato;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colection = [];
        $meses = ['Ninguno', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $colection['meses'] = $meses;
        $aux = ['Natural', 'Jurídico'];
        $colection['tipo de personeria'] = $aux;
        $aux = ['Propietario', 'Poseedor'];
        $colection['caracter de titularidad'] = $aux;
        $aux = ['Ubanización', 'Particular', 'GAM SC'];
        $colection['titular de dominio anterior'] = $aux;
        $aux = ['Ci', 'Nit', 'Ci Extranjero'];
        $colection['tipo de documento'] = $aux;
        $aux = ['Chuquisaca', 'La Paz', 'Cochabamba', 'Oruro', 'Potosi', 'Tarija', 'Santa Cruz', 'Beni', 'Pando', 'Bolivia'];
        $colection['expedido'] = $aux;
        $aux = ['Avenida', 'Calle', 'Callejón', 'Plaza'];
        $colection['tipo de via'] = $aux;
        $aux = ['Area planificada', 'Area no planificada', 'Equipamiento municipal', 'Baldio'];
        $colection['origen del asentamiento'] = $aux;
        $aux = ['Casa', 'Lote', 'Condominio Horizontal', 'Condomino Vertical', 'Equipamiento Municipal','Baldio'];
        $colection['tipo inmueble'] = $aux;
        $aux = ['Alquiler', 'Mixto', 'Anticretico', 'Otro'];
        $colection['locacion'] = $aux;
        $aux = ['GAM', 'Particular'];
        $colection['plano emitido por'] = $aux;
        $aux = ['Compra', 'Suceción hereditaria', 'Adjudicación', 'Usucapión', 'Otro'];
        $colection['modo adquisicion'] = $aux;
        $aux = ['Propio', 'Banco', 'Mutual'];
        $colection['financiamento de aquisicion'] = $aux;
        $aux = ['Avenida principal', 'Avenida secundaria', 'Calle principal', 'Calle Secundaria', 'Calle terciaria y/o callejon'];
        $colection['k tipo via'] = $aux;
        $aux = ['Plano', 'Semi plano', 'Pendiente', 'Muy pendiente', 'Barranco'];
        $colection['k topografia'] = $aux;
        $aux = ['Regular', 'Irregular', 'Muy irregular'];
        $colection['k forma'] = $aux;
        $aux = ['Esquina', 'Media'];
        $colection['k ubicacion'] = $aux;
        $aux = ['Agua potable', 'Energia eléctrica', 'Teléfono', 'Alcantarillado', 'Gas'];
        $colection['k servicios'] = $aux;
        $aux = ['Asfalto', 'Adoquin', 'Cemento', 'Piedra', 'Ripio', 'Tierra', 'Loseta'];
        $colection['k revestimiento de via'] = $aux;
        $aux = ['Excelente', 'Muy bueno', 'Bueno', 'Regular', 'Malo', 'Ruinas'];
        $colection['estado de conservacion'] = $aux;
        $aux = ['Bueno', 'Regular', 'Malo'];
        $colection['estado de conservacion mejora'] = $aux;
        $aux = ['Comercial', 'Oficinas', 'Residencial', 'Industrial', 'Servicio público', 'Recreación'];
        $colection['destino uso'] = $aux;
        $aux = ['Cimientos', 'Estructuras', 'Entrepisos', 'Estructura del techo', 'Muros y tabiques', 'Cubierta o techo'];
        $colection['obra gruesa'] = $aux;
        $aux = ['Cielos', 'Acabado de pisos', 'Ventanas', 'Puertas', 'Revestimiento de muros internos', 'Revestimientos de muros externos'];
        $colection['obra fina'] = $aux;
        $aux = ['Electricidad', 'Agua potable', 'Alcantarillado', 'Artefactos sanitarios', 'Artefactos de concina'];
        $colection['ic servicios'] = $aux;
        foreach ($colection as $key => $item) {
            $this->crearDato($item, $key);
        }
    }
    public function crearDato($datos, $tipo)
    {
        foreach ($datos as $item) {
            Dato::create([
                'tipo' => $tipo,
                'valor' => $item,
            ]);
        }
    }
}
