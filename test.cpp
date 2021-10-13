/**
 * test.cpp
 *
 * Joel Rummel
 * jrummel
 *
 * EECS 183: Project 3
 *
 * Test suite for all Project 3 functions
 */

#include "utility.h"
#include "caesar.h"
#include "vigenere.h"
#include "polybius.h"

#include <iostream>
#include <string>

using namespace std;

void testShiftAlphaCharacter();
void testToUpperCase();
void testCharToInt();
void testRemoveNonAlphas();
void testRemoveDuplicate();
void testMixKey();
void testFillGrid();
void testFindInGrid();
void testCaesarCipher();
void testVigenereCipher();
void testPolybiusSquare();

int main() {
	testShiftAlphaCharacter();
	testToUpperCase();
	testCharToInt();
	testRemoveNonAlphas();
	testRemoveDuplicate();
	testMixKey();
	testFillGrid();
	testFindInGrid();
	testCaesarCipher();
	testVigenereCipher();
	testPolybiusSquare();

	return 0;
}

void testShiftAlphaCharacter() {
	// test shiftAlphaCharacter
	cout << shiftAlphaCharacter('a', 0) << endl;
	cout << shiftAlphaCharacter('a', 1) << endl;
	cout << shiftAlphaCharacter('b', 2) << endl;
	cout << shiftAlphaCharacter('z', 1) << endl;
	cout << shiftAlphaCharacter('Z', 5) << endl;
	cout << shiftAlphaCharacter('g', 50) << endl;
	cout << shiftAlphaCharacter('b', -5) << endl;
	cout << shiftAlphaCharacter('y', -10) << endl;
	return;
}

void testToUpperCase() {
	cout << toUpperCase("abcdefg") << endl;
	cout << toUpperCase("12345") << endl;
	cout << toUpperCase("789e3") << endl;
	cout << toUpperCase("AAAGHB..789") << endl;
	cout << toUpperCase("$$$$ bbbb $$$$bbbb BBbbCCZzz 44") << endl;
}

void testRemoveNonAlphas() {
	cout << removeNonAlphas("HELLO WORLD") << endl;
	cout << removeNonAlphas("H3LL0 W0R1D") << endl;
	cout << removeNonAlphas("HELLO WORLD!") << endl;
	cout << removeNonAlphas("   ...   333 ... e3 ... 789 ... abc") << endl;
}

void testRemoveDuplicate() {
	cout << removeDuplicate("AABBCAB") << endl;
	cout << removeDuplicate("ABCDEFGHIJKLMNOP") << endl;
	cout << removeDuplicate("A3RDC3") << endl;
	cout << removeDuplicate("PORCUPINE") << endl;
}

void testCharToInt() {
	cout << charToInt('3') << endl;
	cout << charToInt('0') << endl;
	cout << charToInt('1') << endl;
	cout << charToInt('5') << endl;
	cout << charToInt('9') << endl;
}

void testCaesarCipher() {
	cout << caesarCipher("Goodbye Cruel w0rlD", 4, true) << endl;
	cout << caesarCipher("BCDEFG HIJKLMNOP QRSTUV WXYZ", 7, true) << endl;
	cout << caesarCipher("What. i$. uP. mY dud3s!!!", 2, false) << endl;
	cout << caesarCipher("Random Message ! LOL a b c D e F I L z A a", 20, false) << endl;
}

void testVigenereCipher() {
	cout << vigenereCipher("Meet M3 at 11 p.m. @ de Diag", "a word of keys", true) << endl;
	cout << vigenereCipher("hello world!!", "compsci", false) << endl;
	cout << vigenereCipher("abcdefg wxyz", "w0r3d", true) << endl;
	cout << vigenereCipher("ABCDEFG WXYZ.", "012345G", false) << endl;
}

void testFillGrid() {
	char daGrid[6][6];
	fillGrid(daGrid, "ZYXWVUTSRQPONMLKJIHGFEDCBA9ADCDEFGHJ");
	printGrid(daGrid);
	cout << endl;
	fillGrid(daGrid, "1098 c 3 s z a 0 9 3 8dcm.fnwewjlasn");
	printGrid(daGrid);
	cout << endl;
}

void testMixKey() {
	cout << mixKey("ABCD0913GF") << endl;
	cout << mixKey("E") << endl;
	cout << mixKey("987654321POIUYTREWLKJHGFDSAMNB") << endl;
	cout << mixKey("POLYBIUS") << endl;
}

void testFindInGrid() {
	char daGrid[6][6];
	fillGrid(daGrid, ALNUM);
	cout << findInGrid('E', daGrid) << endl;
	cout << findInGrid('5', daGrid) << endl;
	cout << findInGrid('1', daGrid) << endl;
	cout << findInGrid('Y', daGrid) << endl;
	cout << findInGrid('A', daGrid) << endl;
}

void testPolybiusSquare() {
	char daGrid[6][6];
	fillGrid(daGrid, ALNUM);
	cout << polybiusSquare(daGrid, "HELOWRD", "WHAT IS UP MY DUDES", true) << endl;
	cout << polybiusSquare(daGrid, "KEY", "HELL0 EVERY0N3", false) << endl;
}