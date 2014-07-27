<?php
namespace Egoi;

use Egoi\Egoi;

class Translate
{
	const SUBSCRIBER_UNCONFIRMED    	= 0;
	const SUBSCRIBER_ACTIVE         	= 1;
	const SUBSCRIBER_REMOVED        	= 2;
	const SUBSCRIBER_INACTIVE       	= 4;
	
	const VALIDATE_SYNTAX               = 0;
	const VALIDATE_SYNTAX_MX            = 1;
	const VALIDATE_SYNTAX_MX_ADDRESS    = 2;
	
	const STATUS_TYPE_ERROR				= 0;
	const STATUS_TYPE_SUCCESS			= 1;
	const STATUS_TYPE_WARNING			= 2;
	
	const LANG_EN = 'en';
	const LANG_BR = 'br';
	
	public static $status = array(
		'CANNOT_BE_DELETED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Impossível remover este item.',
			),
		),
		'ALREADY_DELETED' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O assinante já foi removido.',
			),
		),
		'LIST_NOT_FOUND' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista não encontrada. Entre em contato com o administrador.',
			),
		),
		'LIST_MISSING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista não encontrada. Entre em contato com o administrador.',
			),
		),
		'NO_MORE_LISTS_ALLOWED' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Limite de listas excedido. Entre em contato com o administrador.',
			),
		),
		'NO_ACCESS' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_USERNAME_AND_PASSWORD' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_USERNAME' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_PASSWORD' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso nao permitido. Entre em contato com o administrador.',
			),
		),
		'EMAIL_REQUIRED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O preenchimento do campo de e-mail é obrigatório.',
			),
		),
		'SUBSCRIBER_MISSING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante não encontrado.',
			),
		),
		'NO_SUBSCRIBERS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista sem assinantes.',
			),
		),
		'CANNOT_ADD_MORE_SUBSCRIBERS' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Não é permitido adicionar mais assinantes a esta lista. Entre em contato com o administrador.',
			),
		),
		'SUBSCRIBER_DATA_CANNOT_BE_EDITED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Não é permitido alterar os dados deste assinante.',
			),
		),
		'SUBSCRIBER_ALREADY_REMOVED' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante removido com sucesso!',
			),
		),
		'SUBSCRIBER_NOT_FOUND' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante não encontrado.',
			),
		),
		'EMAIL_ADDRESS_INVALID_DOESNT_EXIST' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail inexistente.',
			),
		),
		'EMAIL_ALREADY_EXISTS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail já cadastrado.',
			),
		),
		'EMAIL_ADDRESS_INVALID' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail inválido. Preencha os dados corretamente.',
			),
		),
		'NO_DATA_TO_INSERT' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Preencha o email corretamente.',
			),
		),
		'INTERNAL_ERROR' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu um erro ao processar.',
			),
		),
		'ERROR' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu um erro ao processar.',
			),
		),
		'WARNING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu uma falha ao processar.',
			),
		),
		'SUCCESS' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante cadastrado com sucesso!',
			),
		),
	);
	
	public static function translate($message_id)
	{
		if(array_key_exists($message_id, self::$status))
		{
			if(array_key_exists(Egoi::getLanguage(), self::$status[$message_id]['message']))
			{
				return self::$status[$message_id]['message'][Egoi::getLanguage()];
			}
		}
		
		return $message_id;
	}
}