# getURL
Muestra como direccionar y desglozar una petición URL.

Muestra como pre-procesar una petición con scripts **.htaccess**
# Descripción.

Una petición **URL** es un  acrónimo, (del inglés Uniform Resource Locators) es un Localizador de Recursos 
codificado en una dirección web única, sus componentes localizan y recuperan  recursos electrónicos.

Una URL estándart tiene seis componentes, así que por ejemplo:

```
http://www.example.com:80/path/to/myfile.html?key1=value1&key2=value2#SomewhereInTheDocument
```

| Número       | Componente              | Descripción |
| :---         |     :---:               |  :---       |
| 1 de 6       | http                    | Define el tipo de protocolo usado para intercambuiar y,o transferir datos en el ámbito de una red por el navegador web. |
| 2 de 6       | www.example.com         | Identifica al nombre del dominio del servidor web, es una dirección codificada, en formato ipv4-ipv6, para identificar a un servidor web en una infraestructura de internet.      |
| 3 de 6       | 80                      | Es un identificador de acceso a los recursos  y,o servicios en una conexión segura cifrada para servidor web.      |
| 4 de 6       | /path/to/myfile.html    | Define la ruta de acceso al recurso en el servidor.     |
| 5 de 6       | ?key1=value1&key2=value2| Definen los parámetros de pares relación: clave-valor. key-value que complementan la búsqueda y acceso al recurso en el servidor, es una cadena de consulta para comunicar datos desde un formulario hacia el servidor; es una relación para enviar, identificar datos y filtrar resultados de búsqueda. identificador de inicio de pares relacionados, = valor asignado a identificador, &,% separador, delimitador de parámetros. https://www.ietf.org/rfc/rfc3986.txt     |
| 6 de 6       | #SomewhereInTheDocument | Es un identificador de un elemento y,o fragmento HTML     |

