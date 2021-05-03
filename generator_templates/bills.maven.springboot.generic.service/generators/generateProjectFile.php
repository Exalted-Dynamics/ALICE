<?php

function generateProjectFile($projectName, $projectComments)
{
    $projectFileString = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $projectFileString .= '<projectDescription>' . PHP_EOL;
    $projectFileString .= '    <name>' . $projectName . '</name>' . PHP_EOL;
    $projectFileString .= '    <comment>' . $projectComments . '</comment>' . PHP_EOL;
    $projectFileString .= '    <projects>' . PHP_EOL;
    $projectFileString .= '    </projects>' . PHP_EOL;
    $projectFileString .= '    <buildSpec>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.eclipse.jdt.core.javabuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.eclipse.wst.common.project.facet.core.builder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.jboss.tools.jst.web.kb.kbbuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.hibernate.eclipse.console.hibernateBuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.jboss.tools.cdi.core.cdibuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.eclipse.wst.validation.validationbuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.springframework.ide.eclipse.core.springbuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.springframework.ide.eclipse.boot.validation.springbootbuilder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '        <buildCommand>' . PHP_EOL;
    $projectFileString .= '            <name>org.eclipse.m2e.core.maven2Builder</name>' . PHP_EOL;
    $projectFileString .= '            <arguments>' . PHP_EOL;
    $projectFileString .= '            </arguments>' . PHP_EOL;
    $projectFileString .= '        </buildCommand>' . PHP_EOL;
    $projectFileString .= '    </buildSpec>' . PHP_EOL;
    $projectFileString .= '    <natures>' . PHP_EOL;
    $projectFileString .= '        <nature>org.springframework.ide.eclipse.core.springnature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.jem.workbench.JavaEMFNature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.wst.common.modulecore.ModuleCoreNature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.jdt.core.javanature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.m2e.core.maven2Nature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.wst.common.project.facet.core.nature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.eclipse.wst.jsdt.core.jsNature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.hibernate.eclipse.console.hibernateNature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.jboss.tools.jst.web.kb.kbnature</nature>' . PHP_EOL;
    $projectFileString .= '        <nature>org.jboss.tools.cdi.core.cdinature</nature>' . PHP_EOL;
    $projectFileString .= '    </natures>' . PHP_EOL;
    $projectFileString .= '</projectDescription>' . PHP_EOL;

    return $projectFileString;
}

$projectName= 'com.omni.systems.application.settings.service';
$projectComments = '';

echo generateProjectFile($projectName, $projectComments);