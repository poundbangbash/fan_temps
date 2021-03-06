<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class FanTempsAddSmcColumns extends Migration
{
    private $tableName = 'fan_temps';

    public function up()
    {
        $capsule = new Capsule();
    
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->double('fnfd')->nullable();
            $table->double('fnum')->nullable();
            $table->double('mssf')->nullable();
            $table->double('dba0')->nullable();
            $table->double('dba1')->nullable();
            $table->double('dba2')->nullable();
            $table->double('dbah')->nullable();
            $table->double('dbat')->nullable();
            $table->integer('aupo')->nullable();
            $table->integer('alsl')->nullable();
            $table->integer('msac')->nullable();
            $table->double('msag')->nullable();
            $table->double('msam')->nullable();
            $table->double('msha')->nullable();
            $table->integer('msld')->nullable();
            $table->integer('hdbs')->nullable();
            $table->integer('mssd')->nullable();
            $table->integer('mssp')->nullable();
            $table->integer('mstc')->nullable();
            $table->integer('mstg')->nullable();
            $table->integer('mstm')->nullable();
            $table->integer('bnum')->nullable();
            $table->integer('natj')->nullable();
            $table->integer('nati')->nullable();
            $table->integer('lsof')->nullable();
            $table->string('lspv')->nullable();
            $table->double('mo_x')->nullable();
            $table->double('mo_y')->nullable();
            $table->double('mo_z')->nullable();
            $table->integer('spht')->nullable();
            $table->integer('sph0')->nullable();
            $table->integer('sght')->nullable();
            $table->double('sgtt')->nullable();
            $table->double('sctg')->nullable();
            $table->double('sgtg')->nullable();
            $table->double('shtg')->nullable();
            $table->double('sltg')->nullable();
            $table->double('sltp')->nullable();
            $table->double('sotg')->nullable();
            $table->double('sptg')->nullable();
            $table->double('slpt')->nullable();
            $table->double('slst')->nullable();
            $table->double('sppt')->nullable();
            $table->double('spst')->nullable();
            $table->double('ibac')->nullable();
            $table->double('ib0p')->nullable();
            $table->double('ib0l')->nullable();
            $table->double('ib0r')->nullable();
            $table->double('ipbf')->nullable();
            $table->double('icmc')->nullable();
            $table->double('ipbr')->nullable();
            $table->double('icac')->nullable();
            $table->double('icbc')->nullable();
            $table->double('ics0')->nullable();
            $table->double('ic0c')->nullable();
            $table->double('ic1c')->nullable();
            $table->double('ic2c')->nullable();
            $table->double('ic3c')->nullable();
            $table->double('ic4c')->nullable();
            $table->double('ic5c')->nullable();
            $table->double('ic6c')->nullable();
            $table->double('ic7c')->nullable();
            $table->double('ic5r')->nullable();
            $table->double('ic0g')->nullable();
            $table->double('icgc')->nullable();
            $table->double('icgm')->nullable();
            $table->double('icam')->nullable();
            $table->double('ics1')->nullable();
            $table->double('imcc')->nullable();
            $table->double('ic0m')->nullable();
            $table->double('ic8r')->nullable();
            $table->double('ic0r')->nullable();
            $table->double('icec')->nullable();
            $table->double('icsc')->nullable();
            $table->double('im3c')->nullable();
            $table->double('ig0r')->nullable();
            $table->double('ig0c')->nullable();
            $table->double('ig1c')->nullable();
            $table->double('ig0f')->nullable();
            $table->double('ih1z')->nullable();
            $table->double('ih2z')->nullable();
            $table->double('ih3z')->nullable();
            $table->double('ih4z')->nullable();
            $table->double('ih05')->nullable();
            $table->double('ih02')->nullable();
            $table->double('ikbc')->nullable();
            $table->double('ilcd')->nullable();
            $table->double('iblc')->nullable();
            $table->double('iblr')->nullable();
            $table->double('im1c')->nullable();
            $table->double('i18c')->nullable();
            $table->double('id2r')->nullable();
            $table->double('id0r')->nullable();
            $table->double('id5r')->nullable();
            $table->double('im0r')->nullable();
            $table->double('im0c')->nullable();
            $table->double('imas')->nullable();
            $table->double('imbs')->nullable();
            $table->double('io0r')->nullable();
            $table->double('io3r')->nullable();
            $table->double('io5r')->nullable();
            $table->double('ie1s')->nullable();
            $table->double('ie2s')->nullable();
            $table->double('ie3s')->nullable();
            $table->double('ie4s')->nullable();
            $table->double('ieas')->nullable();
            $table->double('iebs')->nullable();
            $table->double('in0c')->nullable();
            $table->double('iscc')->nullable();
            $table->double('ip0c')->nullable();
            $table->double('ihir')->nullable();
            $table->double('ihcc')->nullable();
            $table->double('ihnc')->nullable();
            $table->double('is1c')->nullable();
            $table->double('if3c')->nullable();
            $table->double('if5c')->nullable();
            $table->double('iidc')->nullable();
            $table->double('ihsc')->nullable();
            $table->double('iulc')->nullable();
            $table->double('iurc')->nullable();
            $table->double('itpc')->nullable();
            $table->double('itar')->nullable();
            $table->double('it3c')->nullable();
            $table->double('iapc')->nullable();
            $table->double('ibtc')->nullable();
            $table->double('pb0r')->nullable();
            $table->double('pblc')->nullable();
            $table->double('pcac')->nullable();
            $table->double('pcbc')->nullable();
            $table->double('pcam')->nullable();
            $table->double('pc0c')->nullable();
            $table->double('pc1c')->nullable();
            $table->double('pc2c')->nullable();
            $table->double('pc3c')->nullable();
            $table->double('pc4c')->nullable();
            $table->double('pc5c')->nullable();
            $table->double('pc6c')->nullable();
            $table->double('pc7c')->nullable();
            $table->double('pcpd')->nullable();
            $table->double('pcpg')->nullable();
            $table->double('pcfc')->nullable();
            $table->double('pcgm')->nullable();
            $table->double('pmcc')->nullable();
            $table->double('pcpc')->nullable();
            $table->double('ptgr')->nullable();
            $table->double('pcpr')->nullable();
            $table->double('pc1r')->nullable();
            $table->double('pc5r')->nullable();
            $table->double('pcpl')->nullable();
            $table->double('pcpt')->nullable();
            $table->double('pctr')->nullable();
            $table->double('pcec')->nullable();
            $table->double('pcsc')->nullable();
            $table->double('pd0r')->nullable();
            $table->double('pg0r')->nullable();
            $table->double('pg0c')->nullable();
            $table->double('pgtr')->nullable();
            $table->double('ph1z')->nullable();
            $table->double('ph2z')->nullable();
            $table->double('ph3z')->nullable();
            $table->double('ph4z')->nullable();
            $table->double('ph02')->nullable();
            $table->double('ph05')->nullable();
            $table->double('pd2r')->nullable();
            $table->double('pp0r')->nullable();
            $table->double('pc0r')->nullable();
            $table->double('pd5r')->nullable();
            $table->double('pdmr')->nullable();
            $table->double('pm0r')->nullable();
            $table->double('pmas')->nullable();
            $table->double('pmbs')->nullable();
            $table->double('ppsm')->nullable();
            $table->double('pm0c')->nullable();
            $table->double('pm1c')->nullable();
            $table->double('po0r')->nullable();
            $table->double('phnc')->nullable();
            $table->double('po3r')->nullable();
            $table->double('po5r')->nullable();
            $table->double('ppbr')->nullable();
            $table->double('pn1r')->nullable();
            $table->double('pn0c')->nullable();
            $table->double('pe1s')->nullable();
            $table->double('pe2s')->nullable();
            $table->double('pe3s')->nullable();
            $table->double('pe4s')->nullable();
            $table->double('peas')->nullable();
            $table->double('pebs')->nullable();
            $table->double('pp0c')->nullable();
            $table->double('ptar')->nullable();
            $table->double('ps1c')->nullable();
            $table->double('phcc')->nullable();
            $table->double('pdtr')->nullable();
            $table->double('pstr')->nullable();
            $table->double('pthc')->nullable();
            $table->double('phpc')->nullable();
            $table->double('v1r1')->nullable();
            $table->double('vacc')->nullable();
            $table->double('vv7s')->nullable();
            $table->double('vbat')->nullable();
            $table->double('vb0r')->nullable();
            $table->double('vc1c')->nullable();
            $table->double('vcs0')->nullable();
            $table->double('vcac')->nullable();
            $table->double('vcbc')->nullable();
            $table->double('vc0c')->nullable();
            $table->double('vc2c')->nullable();
            $table->double('vc3c')->nullable();
            $table->double('vc4c')->nullable();
            $table->double('vc5c')->nullable();
            $table->double('vc6c')->nullable();
            $table->double('vc7c')->nullable();
            $table->double('vc0g')->nullable();
            $table->double('vn0c')->nullable();
            $table->double('vc0m')->nullable();
            $table->double('vs2c')->nullable();
            $table->double('vcgc')->nullable();
            $table->double('vcsc')->nullable();
            $table->double('vv1r')->nullable();
            $table->double('vcfr')->nullable();
            $table->double('vg0r')->nullable();
            $table->double('vg0c')->nullable();
            $table->double('vg1c')->nullable();
            $table->double('vg0f')->nullable();
            $table->double('vv2s')->nullable();
            $table->double('vr3r')->nullable();
            $table->double('vs8c')->nullable();
            $table->double('vh05')->nullable();
            $table->double('vv1s')->nullable();
            $table->double('vp0r')->nullable();
            $table->double('vdr2')->nullable();
            $table->double('vv9s')->nullable();
            $table->double('vd8r')->nullable();
            $table->double('vd5r')->nullable();
            $table->double('vm0r')->nullable();
            $table->double('vmas')->nullable();
            $table->double('vmbs')->nullable();
            $table->double('vn1r')->nullable();
            $table->integer('fan_9')->nullable();
            $table->integer('fanmin9')->nullable();
            $table->integer('fanmax9')->nullable();
            $table->integer('fan_10')->nullable();
            $table->integer('fanmin10')->nullable();
            $table->integer('fanmax10')->nullable();
            $table->integer('fan_11')->nullable();
            $table->integer('fanmin11')->nullable();
            $table->integer('fanmax11')->nullable();
            $table->integer('fan_12')->nullable();
            $table->integer('fanmin12')->nullable();
            $table->integer('fanmax12')->nullable();
            $table->integer('fan_13')->nullable();
            $table->integer('fanmin13')->nullable();
            $table->integer('fanmax13')->nullable();
            $table->integer('fan_14')->nullable();
            $table->integer('fanmin14')->nullable();
            $table->integer('fanmax14')->nullable();
            $table->integer('fan_15')->nullable();
            $table->integer('fanmin15')->nullable();
            $table->integer('fanmax15')->nullable();
            $table->integer('fan_16')->nullable();
            $table->integer('fanmin16')->nullable();
            $table->integer('fanmax16')->nullable();
            $table->integer('fan_17')->nullable();
            $table->integer('fanmin17')->nullable();
            $table->integer('fanmax17')->nullable();
        });
     }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('fnfd');
            $table->dropColumn('fnum');
            $table->dropColumn('mssf');
            $table->dropColumn('dba0');
            $table->dropColumn('dba1');
            $table->dropColumn('dba2');
            $table->dropColumn('dbah');
            $table->dropColumn('dbat');
            $table->dropColumn('aupo');
            $table->dropColumn('alsl');
            $table->dropColumn('msac');
            $table->dropColumn('msag');
            $table->dropColumn('msam');
            $table->dropColumn('msha');
            $table->dropColumn('msld');
            $table->dropColumn('hdbs');
            $table->dropColumn('mssd');
            $table->dropColumn('mssp');
            $table->dropColumn('mstc');
            $table->dropColumn('mstg');
            $table->dropColumn('mstm');
            $table->dropColumn('bnum');
            $table->dropColumn('natj');
            $table->dropColumn('nati');
            $table->dropColumn('lsof');
            $table->dropColumn('lspv');
            $table->dropColumn('mo_x');
            $table->dropColumn('mo_y');
            $table->dropColumn('mo_z');
            $table->dropColumn('spht');
            $table->dropColumn('sph0');
            $table->dropColumn('sght');
            $table->dropColumn('sgtt');
            $table->dropColumn('sctg');
            $table->dropColumn('sgtg');
            $table->dropColumn('shtg');
            $table->dropColumn('sltg');
            $table->dropColumn('sltp');
            $table->dropColumn('sotg');
            $table->dropColumn('sptg');
            $table->dropColumn('slpt');
            $table->dropColumn('slst');
            $table->dropColumn('sppt');
            $table->dropColumn('spst');
            $table->dropColumn('ibac');
            $table->dropColumn('ib0p');
            $table->dropColumn('ib0l');
            $table->dropColumn('ib0r');
            $table->dropColumn('ipbf');
            $table->dropColumn('icmc');
            $table->dropColumn('ipbr');
            $table->dropColumn('icac');
            $table->dropColumn('icbc');
            $table->dropColumn('ics0');
            $table->dropColumn('ic0c');
            $table->dropColumn('ic1c');
            $table->dropColumn('ic2c');
            $table->dropColumn('ic3c');
            $table->dropColumn('ic4c');
            $table->dropColumn('ic5c');
            $table->dropColumn('ic6c');
            $table->dropColumn('ic7c');
            $table->dropColumn('ic5r');
            $table->dropColumn('ic0g');
            $table->dropColumn('icgc');
            $table->dropColumn('icgm');
            $table->dropColumn('icam');
            $table->dropColumn('ics1');
            $table->dropColumn('imcc');
            $table->dropColumn('ic0m');
            $table->dropColumn('ic8r');
            $table->dropColumn('ic0r');
            $table->dropColumn('icec');
            $table->dropColumn('icsc');
            $table->dropColumn('im3c');
            $table->dropColumn('ig0r');
            $table->dropColumn('ig0c');
            $table->dropColumn('ig1c');
            $table->dropColumn('ig0f');
            $table->dropColumn('ih1z');
            $table->dropColumn('ih2z');
            $table->dropColumn('ih3z');
            $table->dropColumn('ih4z');
            $table->dropColumn('ih05');
            $table->dropColumn('ih02');
            $table->dropColumn('ikbc');
            $table->dropColumn('ilcd');
            $table->dropColumn('iblc');
            $table->dropColumn('iblr');
            $table->dropColumn('im1c');
            $table->dropColumn('i18c');
            $table->dropColumn('id2r');
            $table->dropColumn('id0r');
            $table->dropColumn('id5r');
            $table->dropColumn('im0r');
            $table->dropColumn('im0c');
            $table->dropColumn('imas');
            $table->dropColumn('imbs');
            $table->dropColumn('io0r');
            $table->dropColumn('io3r');
            $table->dropColumn('io5r');
            $table->dropColumn('ie1s');
            $table->dropColumn('ie2s');
            $table->dropColumn('ie3s');
            $table->dropColumn('ie4s');
            $table->dropColumn('ieas');
            $table->dropColumn('iebs');
            $table->dropColumn('in0c');
            $table->dropColumn('iscc');
            $table->dropColumn('ip0c');
            $table->dropColumn('ihir');
            $table->dropColumn('ihcc');
            $table->dropColumn('ihnc');
            $table->dropColumn('is1c');
            $table->dropColumn('if3c');
            $table->dropColumn('if5c');
            $table->dropColumn('iidc');
            $table->dropColumn('ihsc');
            $table->dropColumn('iulc');
            $table->dropColumn('iurc');
            $table->dropColumn('itpc');
            $table->dropColumn('itar');
            $table->dropColumn('it3c');
            $table->dropColumn('iapc');
            $table->dropColumn('ibtc');
            $table->dropColumn('pb0r');
            $table->dropColumn('pblc');
            $table->dropColumn('pcac');
            $table->dropColumn('pcbc');
            $table->dropColumn('pcam');
            $table->dropColumn('pc0c');
            $table->dropColumn('pc1c');
            $table->dropColumn('pc2c');
            $table->dropColumn('pc3c');
            $table->dropColumn('pc4c');
            $table->dropColumn('pc5c');
            $table->dropColumn('pc6c');
            $table->dropColumn('pc7c');
            $table->dropColumn('pcpd');
            $table->dropColumn('pcpg');
            $table->dropColumn('pcfc');
            $table->dropColumn('pcgm');
            $table->dropColumn('pmcc');
            $table->dropColumn('pcpc');
            $table->dropColumn('ptgr');
            $table->dropColumn('pcpr');
            $table->dropColumn('pc1r');
            $table->dropColumn('pc5r');
            $table->dropColumn('pcpl');
            $table->dropColumn('pcpt');
            $table->dropColumn('pctr');
            $table->dropColumn('pcec');
            $table->dropColumn('pcsc');
            $table->dropColumn('pg0r');
            $table->dropColumn('pg0c');
            $table->dropColumn('pgtr');
            $table->dropColumn('ph1z');
            $table->dropColumn('ph2z');
            $table->dropColumn('ph3z');
            $table->dropColumn('ph4z');
            $table->dropColumn('ph02');
            $table->dropColumn('ph05');
            $table->dropColumn('pd2r');
            $table->dropColumn('pp0r');
            $table->dropColumn('pc0r');
            $table->dropColumn('pd0r');
            $table->dropColumn('pd5r');
            $table->dropColumn('pdmr');
            $table->dropColumn('pm0r');
            $table->dropColumn('pmas');
            $table->dropColumn('pmbs');
            $table->dropColumn('ppsm');
            $table->dropColumn('pm0c');
            $table->dropColumn('pm1c');
            $table->dropColumn('po0r');
            $table->dropColumn('phnc');
            $table->dropColumn('po3r');
            $table->dropColumn('po5r');
            $table->dropColumn('ppbr');
            $table->dropColumn('pn1r');
            $table->dropColumn('pn0c');
            $table->dropColumn('pe1s');
            $table->dropColumn('pe2s');
            $table->dropColumn('pe3s');
            $table->dropColumn('pe4s');
            $table->dropColumn('peas');
            $table->dropColumn('pebs');
            $table->dropColumn('pp0c');
            $table->dropColumn('ptar');
            $table->dropColumn('ps1c');
            $table->dropColumn('phcc');
            $table->dropColumn('pdtr');
            $table->dropColumn('pstr');
            $table->dropColumn('pthc');
            $table->dropColumn('phpc');
            $table->dropColumn('v1r1');
            $table->dropColumn('vacc');
            $table->dropColumn('vv7s');
            $table->dropColumn('vbat');
            $table->dropColumn('vb0r');
            $table->dropColumn('vc1c');
            $table->dropColumn('vcs0');
            $table->dropColumn('vcac');
            $table->dropColumn('vcbc');
            $table->dropColumn('vc0c');
            $table->dropColumn('vc2c');
            $table->dropColumn('vc3c');
            $table->dropColumn('vc4c');
            $table->dropColumn('vc5c');
            $table->dropColumn('vc6c');
            $table->dropColumn('vc7c');
            $table->dropColumn('vc0g');
            $table->dropColumn('vn0c');
            $table->dropColumn('vc0m');
            $table->dropColumn('vs2c');
            $table->dropColumn('vcgc');
            $table->dropColumn('vcsc');
            $table->dropColumn('vv1r');
            $table->dropColumn('vcfr');
            $table->dropColumn('vg0r');
            $table->dropColumn('vg0c');
            $table->dropColumn('vg1c');
            $table->dropColumn('vg0f');
            $table->dropColumn('vv2s');
            $table->dropColumn('vr3r');
            $table->dropColumn('vs8c');
            $table->dropColumn('vh05');
            $table->dropColumn('vv1s');
            $table->dropColumn('vp0r');
            $table->dropColumn('vdr2');
            $table->dropColumn('vv9s');
            $table->dropColumn('vd8r');
            $table->dropColumn('vd5r');
            $table->dropColumn('vm0r');
            $table->dropColumn('vmas');
            $table->dropColumn('vmbs');
            $table->dropColumn('vn1r');
            $table->dropColumn('fan_9');
            $table->dropColumn('fanmin9');
            $table->dropColumn('fanmax9');
            $table->dropColumn('fan_10');
            $table->dropColumn('fanmin10');
            $table->dropColumn('fanmax10');
            $table->dropColumn('fan_11');
            $table->dropColumn('fanmin11');
            $table->dropColumn('fanmax11');
            $table->dropColumn('fan_12');
            $table->dropColumn('fanmin12');
            $table->dropColumn('fanmax12');
            $table->dropColumn('fan_13');
            $table->dropColumn('fanmin13');
            $table->dropColumn('fanmax13');
            $table->dropColumn('fan_14');
            $table->dropColumn('fanmin14');
            $table->dropColumn('fanmax14');
            $table->dropColumn('fan_15');
            $table->dropColumn('fanmin15');
            $table->dropColumn('fanmax15');
            $table->dropColumn('fan_16');
            $table->dropColumn('fanmin16');
            $table->dropColumn('fanmax16');
            $table->dropColumn('fan_17');
            $table->dropColumn('fanmin17');
            $table->dropColumn('fanmax17');
        });
    }
}
