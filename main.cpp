#include <iostream>

using namespace std;

int main()
{
    //freopen ("Res.txt","w",stdout); // âèâîäèìî ðåçóëüòàò â Res.txt
    freopen ("in.txt","r",stdin);
    int  N; // ê-ñòü â³äð³çê³â
    N =300000; // cin >> N;
    int* W = new int[N]; // âàíòàæîï³äéîìí³ñòü îäíîãî â³äð³çêà
    long long* B = new long long [N]; // ìîæëèâà ê-ñòü áëîê³â

    for (int l=0;l<N;l++) {  // ³íäåêñ ìàñèâà, òèì÷àñîâà çì³ííà
        W[l] = 1000000000;//cin >> W[l]; // âàíòàæîï³äéîìí³ñòü
        B[l] = W[l]; //ïî÷òêîâå çíà÷åííÿ ìîæëèâî¿ ê³ëüêîñò³ áëîê³â
        }

    int h; // ìàêñèìàëüíà âèñîòà íà â³äð³çêó

    for (int i = 0; i<N; i++)
    {
        h = W[i];

        for (int l = i-1; l >-1; l--) // ðóõ âë³âî
        {
            if (W[l] < h)
            {
                h = W[l];
            }
            B[i]+=h;
            if (W[l] == 0)
                break;
        }

        for (int r = i+1; r <N; r++) // ðóõ âë³âî
        {
            if (W[r] < h)
            {
                h = W[r];
            }
            B[i]+=h;
            if (W[r] == 0)
                break;
        }
    }

    ////ïîøóê íàéá³ëüøîãî ìîíóìåíòà çà ê³ëüê³ñòþ áëîê³â
    long long Max= 0 ;

    for (int i = 0; i< N; i++)
    {
        if (B[i]> Max)
            Max = B[i];
    }

    cout << Max;



    delete [] W;
    delete [] B;
    return 0;
}
