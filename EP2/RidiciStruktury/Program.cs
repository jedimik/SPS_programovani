using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RidiciStruktury
{
    class Program
    {
        static void Main(string[] args)
        {
            int hodnota = 150;
            int puvodnihodnota = hodnota;
            int podminka = 3;
            int podminka1 = 25;
            int podminka2 = 65;
            int odecet1 = 8;
            int odecet2 = 10;
            int value = 0;
            for (int i = 0; i < podminka; i++)
            {
                hodnota = puvodnihodnota;
                while (hodnota > podminka1)
                {
                    //Console.WriteLine("*");
                    value++;
                    if (hodnota >= podminka2)
                    {
                        hodnota = hodnota - odecet1;
                    }
                    else
                    {
                        hodnota = hodnota - odecet2;
                    }
                }
            }

            Console.WriteLine("Prvni:" + value);

            hodnota = 100;
            podminka = 23;
            podminka1 = 60;
            podminka2 = 3;
            odecet1 = 9;
            odecet2 = 12;
            value = 0;

            while (hodnota > podminka) //
            {
                if (hodnota > podminka1) //
                {
                    for (int i = 0; i < podminka2; i++)
                    {
                        // Console.WriteLine("*");
                        value++;
                    }

                    hodnota = hodnota - odecet1;
                }
                else
                {
                    //Console.WriteLine("*");
                    hodnota = hodnota - odecet2;
                    value++;
                }
            }
            Console.WriteLine("Druha: " + value);

            podminka = 8;
            podminka1 = 3;
            podminka2 = 2;
            value = 0;
            for (int i = 0; i < podminka; i++)
            {
                if (i >= podminka1)
                {
                    for (int j = 0; j < podminka2; j++)
                    {
                        // Console.WriteLine("*");
                        value++;
                    }
                }
                //Console.WriteLine("*");
                value++;
            }
            Console.WriteLine("Treti: " + value);
            Console.ReadLine();
        }
    }
}
