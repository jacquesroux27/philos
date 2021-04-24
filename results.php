<?php
  $page_type = "results";
  include('translate.php');
?>
<!DOCTYPE html>
<html lang="<?= $i18n->_lang ?>">
  <?php include('partials/head.php'); ?>
  <body>
    <?php include('partials/header.php') ?>

    <div id="content">
      <div id="mainFrame">
        <h2 data-i18n="Résultats"><?= $i18n->get("results") ?></h2>
        <hr />
        <div class="columnContainer">
          <div class="columnLeft">
            <div class="scale">
              <div class="left"><img src="./images/constructivism.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Rationalisme"><?= $i18n->get("constructivism") ?></div>
                  <div class="right-label" data-i18n="Empirisme"><?= $i18n->get("essentialism") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="cAxisNeg" class="axis-left axisConstructivism">
                    <span id="cAxisNegText"></span>
                  </div>
                  <div id="cAxisMid" class="axis-center axisNeutral">
                    <span id="cAxisMidText"></span>
                  </div>
                  <div id="cAxisPos" class="axis-right axisEssentialism">
                    <span id="cAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/essentialism.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/justice_soft.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Matérialisme"><?= $i18n->get("rehabilitative_justice") ?></div>
                  <div class="right-label" data-i18n="Idéalisme"><?= $i18n->get("punitive_justice") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="jAxisNeg" class="axis-left axisLiberal">
                    <span id="jAxisNegText"></span>
                  </div>
                  <div id="jAxisMid" class="axis-center axisNeutral">
                    <span id="jAxisMidText"></span>
                  </div>
                  <div id="jAxisPos" class="axis-right axisAuthoritarism">
                    <span id="jAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/justice_hard.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/progressism.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Altruisme"><?= $i18n->get("progressive") ?></div>
                  <div class="right-label" data-i18n="Individualisme"><?= $i18n->get("conservative") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="sAxisNeg" class="axis-left axisProgressism">
                    <span id="sAxisNegText"></span>
                  </div>
                  <div id="sAxisMid" class="axis-center axisNeutral">
                    <span id="sAxisMidText"></span>
                  </div>
                  <div id="sAxisPos" class="axis-right axisConservatism">
                    <span id="sAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/conservatism.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/internationalism.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Hédonisme"><?= $i18n->get("internationalism") ?></div>
                  <div class="right-label" data-i18n="Eudémonisme"><?= $i18n->get("nationalism") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="bAxisNeg" class="axis-left axisInternationalism">
                    <span id="bAxisNegText"></span>
                  </div>
                  <div id="bAxisMid" class="axis-center axisNeutral">
                    <span id="bAxisMidText"></span>
                  </div>
                  <div id="bAxisPos" class="axis-right axisNationalism">
                    <span id="bAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/nationalism.png" /></div>
            </div>
          </div>

          <div class="columnRight">
            <div class="scale">
              <div class="left"><img src="./images/communism.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Déontologisme"><?= $i18n->get("communism") ?></div>
                  <div class="right-label" data-i18n="Utilitarisme"><?= $i18n->get("capitalism") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="pAxisNeg" class="axis-left axisCommunism">
                    <span id="pAxisNegText"></span>
                  </div>
                  <div id="pAxisMid" class="axis-center axisNeutral">
                    <span id="pAxisMidText"></span>
                  </div>
                  <div id="pAxisPos" class="axis-right axisCapitalism">
                    <span id="pAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/capitalism.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/regulation.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Scepticisme"><?= $i18n->get("regulation") ?></div>
                  <div class="right-label" data-i18n="Dogmatisme"><?= $i18n->get("laissez_faire") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="mAxisNeg" class="axis-left axisRegulation">
                    <span id="mAxisNegText"></span>
                  </div>
                  <div id="mAxisMid" class="axis-center axisNeutral">
                    <span id="mAxisMidText"></span>
                  </div>
                  <div id="mAxisPos" class="axis-right axisLaissez">
                    <span id="mAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/laissezfaire.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/ecology.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Constructivisme"><?= $i18n->get("ecology") ?></div>
                  <div class="right-label" data-i18n="Réalisme"><?= $i18n->get("production") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="eAxisNeg" class="axis-left axisEcology">
                    <span id="eAxisNegText"></span>
                  </div>
                  <div id="eAxisMid" class="axis-center axisNeutral">
                    <span id="eAxisMidText"></span>
                  </div>
                  <div id="eAxisPos" class="axis-right axisProductivism">
                    <span id="eAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/productivism.png" /></div>
            </div>

            <div class="scale">
              <div class="left"><img src="./images/revolution.png" /></div>
              <div class="axis">
                <div class="label">
                  <div class="left-label" data-i18n="Déterminisme"><?= $i18n->get("revolution") ?></div>
                  <div class="right-label" data-i18n="Existentialisme"><?= $i18n->get("reform") ?></div>
                </div>
                <div class="axis-bar">
                  <div id="tAxisNeg" class="axis-left axisRevo">
                    <span id="tAxisNegText"></span>
                  </div>
                  <div id="tAxisMid" class="axis-center axisNeutral">
                    <span id="tAxisMidText"></span>
                  </div>
                  <div id="tAxisPos" class="axis-right axisRefo">
                    <span id="tAxisPosText"></span>
                  </div>
                </div>
              </div>
              <div class="right"><img src="./images/reformism.png" /></div>
            </div>
          </div>
        </div>
        <br />
        <div id="bonusBox">
          <h3 data-i18n="Badges supplémentaires"><?= $i18n->get("bonus_chars") ?></h3>

          <div id="anarBonus" class="description">
            <div class="descImg">
              <img src="./images/anarchism.png" alt="" />
            </div>
            <div class="descTextMono">
              <h4 data-i18n="Nihiliste"><?= $i18n->get("anarchist") ?></h4>
              <p data-i18n="">
                <?= $i18n->get("anarchist_desc") ?>
              </p>
            </div>
          </div>

          <div id="pragBonus" class="description">
            <div class="descImg">
              <img src="./images/pragmatism.png" alt="" />
            </div>
            <div class="descTextMono">
              <h4 data-i18n="Mécaniste"><?= $i18n->get("pragmatist") ?></h4>
              <p data-i18n="">
                <?= $i18n->get("pragmatist_desc") ?>
              </p>
            </div>
          </div>

          <div id="compBonus" class="description">
            <div class="descImg">
              <img src="./images/complotism.png" alt="" />
            </div>
            <div class="descTextMono">
              <h4 data-i18n="Déiste"><?= $i18n->get("conspiracist") ?></h4>
              <p data-i18n="">
                <?= $i18n->get("conspiracist_desc") ?>
              </p>
            </div>
          </div>

          <div id="vegaBonus" class="description">
            <div class="descImg"><img src="./images/veganism.png" alt="" /></div>
            <div class="descTextMono">
              <h4 data-i18n="Esthète"><?= $i18n->get("vegan") ?></h4>
              <p data-i18n="">
                <?= $i18n->get("vegan_desc") ?>
              </p>
            </div>
          </div>

          <div id="monaBonus" class="description">
            <div class="descImg">
              <img src="./images/monarchism.png" alt="" />
            </div>
            <div class="descTextMono">
              <h4 data-i18n="Innéiste"><?= $i18n->get("monarchist") ?></h4>
              <p data-i18n=""><?= $i18n->get("monarchist_desc") ?></p>
            </div>
          </div>

          <div id="reliBonus" class="description">
            <div class="descImg"><img src="./images/religion.png" alt="" /></div>
            <div class="descTextMono">
              <h4 data-i18n="Théiste"><?= $i18n->get("missionary") ?></h4>
              <p data-i18n="">
                <?= $i18n->get("missionary_desc") ?>
              </p>
            </div>
          </div>
        </div>

        <div class="navButtons">
          <a class="button" href="./quiz" data-i18n="restart_test"><?= $i18n->get("restart_test") ?></a>
        </div>
      </div>
    </div>

    <?php include('partials/footer.php'); ?>
    <script src="./flags.js"></script>
    <script src="./results.js"></script>
  </body>
</html>
