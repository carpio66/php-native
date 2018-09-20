/*
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.0 of the PHP license,       |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_0.txt.                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Authors: Andrew Curioso <andrew@example.com>                         |
   +----------------------------------------------------------------------+
*/

/* $ Id: $ */ 

#ifndef PHP_HELLOWORLD_H
#define PHP_HELLOWORLD_H

#ifdef  __cplusplus
extern "C" {
#endif

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#ifdef HAVE_HELLOWORLD

#include <php_ini.h>
#include <SAPI.h>
#include <ext/standard/info.h>
#include <Zend/zend_extensions.h>
#ifdef  __cplusplus
} // extern "C" 
#endif
#ifdef  __cplusplus
extern "C" {
#endif

extern zend_module_entry helloworld_module_entry;
#define phpext_helloworld_ptr &helloworld_module_entry

#ifdef PHP_WIN32
#define PHP_HELLOWORLD_API __declspec(dllexport)
#else
#define PHP_HELLOWORLD_API
#endif

PHP_MINIT_FUNCTION(helloworld);
PHP_MSHUTDOWN_FUNCTION(helloworld);
PHP_RINIT_FUNCTION(helloworld);
PHP_RSHUTDOWN_FUNCTION(helloworld);
PHP_MINFO_FUNCTION(helloworld);

#ifdef ZTS
#include "TSRM.h"
#endif

#define FREE_RESOURCE(resource) zend_list_delete(Z_LVAL_P(resource))

#define PROP_GET_LONG(name)    Z_LVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_LONG(name, l) zend_update_property_long(_this_ce, _this_zval, #name, strlen(#name), l TSRMLS_CC)

#define PROP_GET_DOUBLE(name)    Z_DVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_DOUBLE(name, d) zend_update_property_double(_this_ce, _this_zval, #name, strlen(#name), d TSRMLS_CC)

#define PROP_GET_STRING(name)    Z_STRVAL_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_GET_STRLEN(name)    Z_STRLEN_P(zend_read_property(_this_ce, _this_zval, #name, strlen(#name), 1 TSRMLS_CC))
#define PROP_SET_STRING(name, s) zend_update_property_string(_this_ce, _this_zval, #name, strlen(#name), s TSRMLS_CC)
#define PROP_SET_STRINGL(name, s, l) zend_update_property_stringl(_this_ce, _this_zval, #name, strlen(#name), s, l TSRMLS_CC)

ZEND_BEGIN_MODULE_GLOBALS(helloworld)
  char * greeting;

ZEND_END_MODULE_GLOBALS(helloworld)

#ifdef ZTS
#define HELLOWORLD_G(v) TSRMG(helloworld_globals_id, zend_helloworld_globals *, v)
#else
#define HELLOWORLD_G(v) (helloworld_globals.v)
#endif


PHP_METHOD(SimpleGreeter, say);
#if (PHP_MAJOR_VERSION >= 5)
ZEND_BEGIN_ARG_INFO_EX(SimpleGreeter__say_args, ZEND_SEND_BY_VAL, ZEND_RETURN_VALUE, 1)
  ZEND_ARG_INFO(0, name)
  ZEND_ARG_INFO(0, do_return)
ZEND_END_ARG_INFO()
#else /* PHP 4.x */
#define SimpleGreeter__say_args NULL
#endif

PHP_METHOD(ComplexGreeter, arraySay);
#if (PHP_MAJOR_VERSION >= 5)
ZEND_BEGIN_ARG_INFO_EX(ComplexGreeter__arraySay_args, ZEND_SEND_BY_VAL, ZEND_RETURN_VALUE, 1)
#if (PHP_MINOR_VERSION > 0)
  ZEND_ARG_ARRAY_INFO(0, names, 1)
#else
  ZEND_ARG_INFO(0, names)
#endif
ZEND_END_ARG_INFO()
#else /* PHP 4.x */
#define ComplexGreeter__arraySay_args NULL
#endif

PHP_METHOD(ComplexGreeter, mysqliSay);
#if (PHP_MAJOR_VERSION >= 5)
ZEND_BEGIN_ARG_INFO_EX(ComplexGreeter__mysqliSay_args, ZEND_SEND_BY_VAL, ZEND_RETURN_VALUE, 1)
  ZEND_ARG_INFO(0, result)
  ZEND_ARG_INFO(0, output_type)
ZEND_END_ARG_INFO()
#else /* PHP 4.x */
#define ComplexGreeter__mysqliSay_args NULL
#endif

#if (PHP_MAJOR_VERSION >= 5)
ZEND_BEGIN_ARG_INFO_EX(IGreeting__sayGreeting_args, ZEND_SEND_BY_VAL, ZEND_RETURN_VALUE, 1)
  ZEND_ARG_INFO(0, name)
  ZEND_ARG_INFO(0, do_return)
ZEND_END_ARG_INFO()
#else /* PHP 4.x */
#define IGreeting__sayGreeting_args NULL
#endif

#ifdef  __cplusplus
} // extern "C" 
#endif

#endif /* PHP_HAVE_HELLOWORLD */

#endif /* PHP_HELLOWORLD_H */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
