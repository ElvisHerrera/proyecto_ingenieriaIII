<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../clases/Sesiones.php';

class SesionesTest extends TestCase
{
    // ===== Pruebas para tipo de sesión: cobertura de evento =====

    public function testCoberturaEvento_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('cobertura de evento');

        $this->assertEquals('4h 0min', $strategy->getDuration());
    }

    public function testCoberturaEvento_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('cobertura de evento');

        $this->assertEquals('$500', $strategy->getPrice());
    }

    public function testCoberturaEvento_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('cobertura de evento');

        $this->assertEquals(
            'Fotografía profesional para eventos especiales',
            $strategy->getDescription()
        );
    }

    public function testCoberturaEvento_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('cobertura de evento');

        $this->assertEquals('bi bi-camera2', $strategy->getIcon());
    }

    // ===== Pruebas para tipo de sesión: temática =====

    public function testTematica_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('temática');

        $this->assertEquals('2h 0min', $strategy->getDuration());
    }

    public function testTematica_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('temática');

        $this->assertEquals('$300', $strategy->getPrice());
    }

    public function testTematica_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('temática');

        $this->assertEquals(
            'Sesión fotográfica con temática personalizada',
            $strategy->getDescription()
        );
    }

    public function testTematica_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('temática');

        $this->assertEquals('bi bi-stars', $strategy->getIcon());
    }

    // ===== Pruebas para tipo de sesión: estudio =====

    public function testEstudio_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('estudio');

        $this->assertEquals('1h 30min', $strategy->getDuration());
    }

    public function testEstudio_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('estudio');

        $this->assertEquals('$250', $strategy->getPrice());
    }

    public function testEstudio_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('estudio');

        $this->assertEquals(
            'Sesión en estudio profesional con iluminación controlada',
            $strategy->getDescription()
        );
    }

    public function testEstudio_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('estudio');

        $this->assertEquals('bi bi-lightbulb', $strategy->getIcon());
    }

    // ===== Pruebas para tipo de sesión: exterior =====

    public function testExterior_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('exterior');

        $this->assertEquals('2h 30min', $strategy->getDuration());
    }

    public function testExterior_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('exterior');

        $this->assertEquals('$350', $strategy->getPrice());
    }

    public function testExterior_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('exterior');

        $this->assertEquals(
            'Sesión fotográfica en locaciones exteriores',
            $strategy->getDescription()
        );
    }

    public function testExterior_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('exterior');

        $this->assertEquals('bi bi-tree', $strategy->getIcon());
    }

    // ===== Pruebas para tipo de sesión: corporativo =====

    public function testCorporativo_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('corporativo');

        $this->assertEquals('1h 0min', $strategy->getDuration());
    }

    public function testCorporativo_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('corporativo');

        $this->assertEquals('$200', $strategy->getPrice());
    }

    public function testCorporativo_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('corporativo');

        $this->assertEquals(
            'Fotografías profesionales para uso empresarial',
            $strategy->getDescription()
        );
    }

    public function testCorporativo_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('corporativo');

        $this->assertEquals('bi bi-person-badge', $strategy->getIcon());
    }

    // ===== Pruebas para tipo de sesión: familiar =====

    public function testFamiliar_TieneDuracionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('familiar');

        $this->assertEquals('2h 0min', $strategy->getDuration());
    }

    public function testFamiliar_TienePrecioCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('familiar');

        $this->assertEquals('$280', $strategy->getPrice());
    }

    public function testFamiliar_TieneDescripcionCorrecta()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('familiar');

        $this->assertEquals(
            'Sesión fotográfica familiar en estudio o exterior',
            $strategy->getDescription()
        );
    }

    public function testFamiliar_TieneIconoCorrecto()
    {
        $sessionManager = SessionManager::getInstance();
        $strategy = $sessionManager->getStrategy('familiar');

        $this->assertEquals('bi bi-people', $strategy->getIcon());
    }
}
