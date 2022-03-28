#include "display.h"
#include <iostream>

Display::Display()
{
	//board elements
	m_borderSpace = "\n\n";
	m_playeriBanner = "                 PLAYER i\n\n\n";
	m_enemyBanner =   "               SHOTS FIRED\n\n\n";
	m_colLabel = "      A   B   C   D   E   F   G   H   I\n";
	m_borderLineTop = "    +---+---+---+---+---+---+---+---+---+\n";
	m_rowiLabel = "  i |   |   |   |   |   |   |   |   |   |\n";
	m_gridLine = "    +---+---+---+---+---+---+---+---+---|\n";
	m_borderLineBottom = "    +-----------------------------------+";
	m_friendlyBanner = "\n\n                YOUR SHIPS\n\n\n";

	//shot-feedback elements
	m_hit0 = "\n            _           _       _\n";
	m_hit1 = "             ',       ,'      ,'\n";
	m_hit2 = "               `,    '      ,'\n";
	m_hit3 = "\n            ~.,'__  HIT! __',.~\n";
	m_hit4 = "\n               ,'  ,'   ',\n";
	m_hit5 = "          ,,.'` _,'       `'.,,\n\n\n";
	m_miss = "\n\n                   MISS...\n\n\n";

}

Display::~Display()
{}

void Display::matchFrame(int playerID, char enemyBrd[][9], char friendlyBrd[][9]) const
{
	enemyBoard(enemyBrd, playerID);
	std::cout << m_borderSpace;
	friendlyBoard(friendlyBrd);
}

void Display::enemyBoard(char board[][9], int playerID) const
{
	std::string playeriBanner = m_playeriBanner;
	std::string enemyBanner = m_enemyBanner;
	std::string rowiLabel = m_rowiLabel;

	playeriBanner.replace(24, 1, std::to_string(playerID));

	std::cout << m_borderSpace;
	std::cout << playeriBanner;
	std::cout << enemyBanner;
	std::cout << m_colLabel;
	std::cout << m_borderLineTop;

	for(int i = 0; i < 9; i++)
	{
		rowiLabel.replace(2, 1, std::to_string(i+1));

		for(int j = 0; j < 9; j++)
		{
			if(board[i][j] == 'X')
			{
				rowiLabel.replace(4*j+6, 1, std::string(1, board[i][j]));
			}
			else if(board[i][j] == 'O')
			{
				rowiLabel.replace(4*j+6, 1, std::string(1, board[i][j]));
			}
		}

		std::cout << rowiLabel;
		rowiLabel = m_rowiLabel;

		if(i < 8)
		{
			std::cout << m_gridLine;
		}
		else
		{
			std::cout << m_borderLineBottom;
		}
	}
}

void Display::friendlyBoard(char board[][9]) const
{
	std::string rowiLabel = m_rowiLabel;

	std::cout << m_friendlyBanner;
	std::cout << m_colLabel;
	std::cout << m_borderLineTop;

	for(int i = 0; i < 9; i++)
	{
		rowiLabel.replace(2, 1, std::to_string(i+1));

		for(int j = 0; j < 9; j++)
		{
			if(board[i][j] == 'X')
			{
				rowiLabel.replace(4*j+5, 1, "(");
				rowiLabel.replace(4*j+6, 1, std::string(1, board[i][j]));
				rowiLabel.replace(4*j+7, 1, ")");
			}
			else if(board[i][j] == 'S')
			{
				rowiLabel.replace(4*j+5, 1, "(");
				rowiLabel.replace(4*j+7, 1, ")");
			}
			else if(board[i][j] == 'O')
			{
				rowiLabel.replace(4*j+6, 1, std::string(1, board[i][j]));
			}
		}

		std::cout << rowiLabel;
		rowiLabel = m_rowiLabel;

		if(i < 8)
		{
			std::cout << m_gridLine;
		}
		else
		{
			std::cout << m_borderLineBottom;
		}
	}
	std::cout << m_borderSpace;
}

void Display::hit() const
{
	std::cout << m_hit0;
	std::cout << m_hit1;
	std::cout << m_hit2;
	std::cout << m_hit3;
	std::cout << m_hit4;
	std::cout << m_hit5;
}

void Display::miss() const
{
	std::cout << m_miss;
}
