<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.routing.loader.annot_class' shared service.

@trigger_error('The "sensio_framework_extra.routing.loader.annot_class" service is deprecated since version 5.2', E_USER_DEPRECATED);

return $this->services['sensio_framework_extra.routing.loader.annot_class'] = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
