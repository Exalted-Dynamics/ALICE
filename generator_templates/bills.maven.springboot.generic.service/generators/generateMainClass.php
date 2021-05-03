<?php
function generateMainClass($className, $allowedOrigins)
{
    $mainClassString = 'package application;' . PHP_EOL;

    $mainClassString .= 'import org.springframework.boot.SpringApplication;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.boot.autoconfigure.SpringBootApplication' . PHP_EOL;
    $mainClassString .= 'import org.springframework.boot.builder.SpringApplicationBuilder;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.boot.web.support.SpringBootServletInitializer;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.context.annotation.Bean;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.web.servlet.config.annotation.CorsRegistry;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;' . PHP_EOL;
    $mainClassString .= 'import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;' . PHP_EOL;

    $mainClassString .= '@SpringBootApplication' . PHP_EOL;
    $mainClassString .= 'public class ' . $className . ' extends SpringBootServletInitializer {' . PHP_EOL;

    $mainClassString .= '    public static void main(String[] args) {' . PHP_EOL;
    $mainClassString .= '        SpringApplication.run(' . $className . '.class, args);' . PHP_EOL;
    $mainClassString .= '    }' . PHP_EOL;

    $mainClassString .= '    @Override' . PHP_EOL;
    $mainClassString .= '    protected SpringApplicationBuilder configure(SpringApplicationBuilder builder) {' . PHP_EOL;
    $mainClassString .= '    return builder.sources(' . $className . '.class);' . PHP_EOL;
    $mainClassString .= '    }' . PHP_EOL;

    $mainClassString .= '    @Bean' . PHP_EOL;
    $mainClassString .= '    public WebMvcConfigurer corsConfigurer() {' . PHP_EOL;
    $mainClassString .= '    	return new WebMvcConfigurerAdapter() {' . PHP_EOL;
    $mainClassString .= '    @Override' . PHP_EOL;
    $mainClassString .= '    		public void addCorsMappings(CorsRegistry registry) {' . PHP_EOL;
    $mainClassString .= '        registry.addMapping("/**").allowedOrigins(';

    $index = 0;
    $originCount = count($allowedOrigins);
    foreach ($allowedOrigins as $allowedOrigin) {
        if ($index== $originCount - 1) {
            $mainClassString .= '            "' . $allowedOrigin . '");';
        } else {

            if($index==0) {
                $mainClassString .= '"' . $allowedOrigin . '",' . PHP_EOL;
            } else {
                $mainClassString .= '            "' . $allowedOrigin . '",' . PHP_EOL;
            }
        }
        $index++;
    }
    $mainClassString .= '    }' . PHP_EOL;
    $mainClassString .= '    	};' . PHP_EOL;
    $mainClassString .= '    }' . PHP_EOL;
    $mainClassString .= '}' . PHP_EOL;

    return $mainClassString;
}

$className = 'test';
$allowedOrigins = array('http://192.168.1.206:8080', 'http://192.168.1.8:8080', 'http://192.168.1.8:3200');
generateMainClass($className, $allowedOrigins);